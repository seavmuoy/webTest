<?php
    $__tr_en_dr = dirname(__FILE__);
    $translation = array(
        "login" => "Login",
        "username" => "Username",
        "password" => "Password",
        "submit" => "Submit",
        "change_language" => "Change Language",
        "no_account?" => "Don't have an account yet?",
        "register_now" => "Register Now!",
        "registration_form" => "Registration Form",
        "email" => "Email",
        "gender" => "Gender",
        "male" => "Male",
        "female" => "Female",
        "other" => "Other",
        "class" => "Class",
        "confirm_password" => "Confirm Password",
        "*all_required" => "*: All fields are required unless specified",
        "submit_register" => "Submit Register",
        "already_have_account?" => "Already have an account?",
        "login_instead" => "Login Instead",
        "cookies" => "By using this website, you agree to our use of cookies.<br>We use cookies to provide persistent login sessions with tokens, and will be deleted in 30 minutes of inactivity.",
        "error!" => "Error!",
        "success" => "Success!",
        "login_failed!" => "Login Failed!",
        "register_failed!" => "Registration Failed!",
        "register_success!" => "Registration Success!",
        "reason" => "Reason(s): ",
        "reason.invalid_credentials" => "Invalid credentials.",
        "reason.password_mismatch" => "Passwords do not match.",
        "reason.username_taken" => "Username is taken.",
        "reason.password_too_weak" => "Password is too weak.<br />Password must contain at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.",
        "reason.name_too_long" => "Name is too long.",
        "reason.class_too_long" => "Class is too long.",
        "reason.unknown" => "Unknown error.",
        "reenter_credentials" => "Re-enter credentials",
        "add_products" => "Add Products",
        "settings" => "Settings",
        "logout" => "Logout",
        "dt.empty_table" => "No data available in table",
        "dt.info" => "Showing _START_ to _END_ of _TOTAL_ entries",
        "dt.info_empty" => "Showing 0 to 0 of 0 entries",
        "dt.info_filtered" => "(filtered from _MAX_ total entries)",
        "dt.thousands" => ",",
        "dt.length_menu" => "Show _MENU_ entries",
        "dt.loading_records" => "Loading...",
        "dt.processing" => "Processing...",
        "dt.search" => "Search:",
        "dt.zero_records" => "No matching records found",
        "dt.paginate.first" => "First",
        "dt.paginate.last" => "Last",
        "dt.paginate.next" => "Next",
        "dt.paginate.previous" => "Previous",
        "dt.aria.sort_ascending" => ": activate to sort column ascending",
        "dt.aria.sort_descending" => ": activate to sort column descending",
        "th.user_id" => "User ID",
        "th.product_id" => "Product ID",
        "th.product_name" => "Product Name",
        "th.product_price" => "Product Price",
        "th.product_quantity" => "Product Quantity",
        "th.actions" => "Actions",
        "th.actions.edit" => "Edit",
        "th.actions.delete" => "Delete",
        "swal.edit.title" => "Edit Product",
        "swal.edit.confirm" => "Confirm",
        "swal.edit.discard" => "Discard",
        "swal.edit.discard.title" => "Discarded Changes!",
        "swal.edit.discard.text" => "Changes were not saved",
        "swal.edit.cancel" => "Cancel",
        "swal.edit.confirm.title" => "Are you sure you want to edit this?",
        "swal.edit.confirm.save" => "Save",
        "swal.edit.confirm.cancel" => "Cancel",
        "swal.edit.confirm.save.title" => "Saved!",
        "swal.edit.confirm.save.text" => "Changes were saved",
        "swal.edit.confirm.cancel.title" => "Cancelled!",
        "swal.edit.confirm.error.title" => "Error!",
        "swal.edit.confirm.error.text" => "Something went wrong",
        "swal.delete.title" => "Are you sure you want to delete this product?",
        "swal.delete.text" => "This action cannot be undone!",
        "swal.delete.confirm" => "Confirm",
        "swal.delete.cancel" => "Cancel",
        "swal.delete.confirm.title" => "Deleted!",
        "swal.delete.confirm.text" => "Product was deleted",
        "swal.add.title" => "Add Product",
        "swal.add.confirm" => "Confirm",
        "swal.add.cancel" => "Cancel",
        "swal.add.confirm.title" => "Are you sure you want to add this product?",
        "swal.add.confirm.save" => "Save",
        "swal.add.confirm.cancel" => "Cancel",
        "swal.add.confirm.save.success.title" => "Saved!",
        "swal.add.confirm.save.success.text" => "Product was added",
        "swal.add.confirm.save.error.title" => "Error!",
        "swal.add.confirm.save.error.text" => "Something went wrong",
        "swal.add.confirm.save.forbidden.title" => "Forbidden!",
        "swal.add.confirm.save.forbidden.text" => "You are not allowed to add products",
        "swal.add.confirm.cancel.title" => "Cancelled!",
        "swal.add.confirm.cancel.text" => "Product was not added",
        "swal.add.cancel.title" => "Discarded Changes!",
        "swal.add.cancel.text" => "Changes were not saved",
    );

    $file_content = gzcompress(serialize($translation), 9);

    if (!(file_exists($__tr_en_dr."/translations/translations.en.tr") && $file_content === file_get_contents($__tr_en_dr."/translations/translations.en.tr"))) {
        file_put_contents($__tr_en_dr."/translations/translations.en.tr", $file_content);
    }
?>