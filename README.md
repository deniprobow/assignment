# assignment
This is an assignment from Soding Corporate to me.

# Index.php
This file is index and list task of assignment project. I list all of row in table users here using repeat "while". There is a column name "name" to save name of users in STRING data type, also there is a column name "email" 
to save email of user in STRING data type.

# Create.php
This file is create task of assignment project. There are two form, first column's label is name to input name of users. Next column's label is email to input email of users. Include file configuration of db connection first, And then there is a condition if 
there is a POST submit name "submit_data" then we will insert all post from two form in page then insert in table users. Then we check, if query success executed there is message "Data inserted successfully" and if query not
success there is a message "Sorry, Data is not inserted"

# Update.php
This file is update task of assignment project. We select which row that we want to update, and there is a parameter name id to save rowid of table "users".Include file configuration of db connection first, and then there is a condition if 
there is a POST submit name "submit_data" then we will update which post want to update from two form in page then insert in table users. Then we check, if query success executed there is message "Data is updated successfully" and if query not
success there is a message "Sorry, Data is not updated."

#Delete.php
This file is delete task of assignment project. We select which row that we want to delete, then from parameter id in url delete.php we delete the data in query with where sql parameter. if query success executed there is message "Record is deleted successfully" and if query not
success there is a message "Sorry, Record is not deleted."