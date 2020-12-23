<?php
 include 'include.php';
 doDB();
 if (!$_POST) {
 //haven't seen the selection form, so show it
 $display_block = "<h1>Select an Entry</h1>";
 //get parts of records
 $get_list_sql = "SELECT id,CONCAT_WS(', ', l_name, f_name) AS display_name FROM master_name ORDER BY l_name, f_name";
 $get_list_res = mysqli_query($mysqli, $get_list_sql) or die(mysqli_error($mysqli));
 if (mysqli_num_rows($get_list_res) < 1) {
 //no records
  $display_block .= "<p><em>Sorry, no records to select!</em></p>";
 }
  else {
//has records, so get results and print in a form
    $display_block .= 
	"<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">
       <p><label for=\"sel_id\">Select a Record:</label><br/>
       <select id="sel_id\" name=\"sel_id\" required=\"required\">
        <option value=\"\">-- Select One --</option>";

     while ($recs = mysqli_fetch_array($get_list_res)) {
           $id = $recs['id'];

          $display_name = stripslashes($recs['display_name']);
          $display_block .="<option value=\"".$id."\">".$display_name."</option>";
        }
     $display_block .= "
     </select>
      <button type=\"submit\" name=\"submit\" value=\"view\">View Selected Entry\"></button>
    </form>";
 }
 //free result
  mysqli_free_result($get_list_res);
}
 else if ($_POST) {
44: //check for required fields
45: if ($_POST[‘sel_id’] == “”) {
46: header(“Location: delentry.php”);
47: exit;
48: }
49:
50: //create safe version of ID
51: $safe_id = mysqli_real_escape_string($mysqli, $_POST[‘sel_id’]);
52:
FIGURE 20.5
An individual’s
record.
www.it-ebooks.info
ptg8106388
Creating the Record-Deletion Mechanism 405
53: //issue queries
54: $del_master_sql = “DELETE FROM master_name WHERE
55: id = ‘“.$safe_id.”’”;
56: $del_master_res = mysqli_query($mysqli, $del_master_sql)
57: or die(mysqli_error($mysqli));
58:
59: $del_address_sql = “DELETE FROM address WHERE
60: id = ‘“.$safe_id.”’”;
61: $del_address_res = mysqli_query($mysqli, $del_address_sql)
62: or die(mysqli_error($mysqli));
63:
64: $del_tel_sql = “DELETE FROM telephone WHERE id = ‘“.$safe_id.”’”;
65: $del_tel_res = mysqli_query($mysqli, $del_tel_sql)
66: or die(mysqli_error($mysqli));
67:
68: $del_fax_sql = “DELETE FROM fax WHERE id = ‘“.$safe_id.”’”;
69: $del_fax_res = mysqli_query($mysqli, $del_fax_sql)
70: or die(mysqli_error($mysqli));
71:
72: $del_email_sql = “DELETE FROM email WHERE id = ‘“.$safe_id.”’”;
73: $del_email_res = mysqli_query($mysqli, $del_email_sql)
74: or die(mysqli_error($mysqli));
75:
76: $del_note_sql = “DELETE FROM personal_notes WHERE
77: id = ‘“.$safe_id.”’”;
78: $del_note_res = mysqli_query($mysqli, $del_note_sql)
79: or die(mysqli_error($mysqli));
80:
81: mysqli_close($mysqli);
82:
83: $display_block = “<h1>Record(s) Deleted</h1>
84: <p>Would you like to
85: <a href=\””.$_SERVER[‘PHP_SELF’].”\”>delete another</a>?</p>”;
86: }
87: ?>
88: <!DOCTYPE html>
89: <html>
90: <head>
91: <title>My Records</title>
92: </head>
93: <body>
94: <?php echo $display_block; ?>
95: </body>
96: </html>
