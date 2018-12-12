// call to edit or delete a product
$(function () {
    $('.js-sweetalert2 button').on('click', function () {

        var id = $(this).data('type');

        // used for an exception of a button
        if(id === undefined) {
            return;
        }

        // edit button clicked
        // set up product details for edit product modal
        if(id[0] == 'E') { 

           $element = $(this).parent().parent().children(); 
           $category_id = $($element[0]).text();  
           $('#txtEditBrand').val($($element[1]).text());
           $('#txtEditName').val($($element[2]).text());
           $('#txtEditSize').val($($element[3]).text());
           $('#cmbEditUnit').val($($element[4]).text());
           $('#txtEditQuantity').val($($element[5]).text());
           $('#txtEditUnitPrice').val($($element[6]).text());
           $('#cmbEditCategory').val($(this).data('category'));

           // set product id in div product id
           $('#divProductId').attr('data-n', id.slice(1) );

           
            // check if category exists before updating
            return;
        }

    swal({
        title: "Sure?",
        text: "You will not be able to undo this operation",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {

        // ajax call to remove user
        $.get('http://localhost/olmart/index.php/Welcome/remove_category', { category_id: id },
            function(data, status) {

                if(data === 'remove successful') {
                    swal("Removed!", "The Category has being removed.", "success");
                    window.location = 'http://localhost/olmart/index.php/Welcome/category';
                } else {
                    swal("Failed!", "The Category couldnot be removed.", "failure");

                }
            }
        );
        
    });
    });
});


function isProductExist(type)
{
           
    //add product elements
    var add_category_id = $('#cmbCategory');
    var add_brand = $('#txtBrand');
    var add_name = $('#txtName');
    var add_size = $('#txtSize');
    var add_unit = $('#cmbUnit');
    var add_quantity = $('#txtQuantity');
    var add_unit_price = $('#txtUnitPrice');

    // edit product elements
    var edit_category_id = $('#cmbEditCategory');
    var edit_brand = $('#txtEditBrand');
    var edit_name = $('#txtEditName');
    var edit_size = $('#txtEditSize');
    var edit_unit = $('#cmbEditUnit');
    var edit_quantity = $('#txtEditQuantity');
    var edit_unit_price = $('#txtEditUnitPrice');

    // needed product id for updation
    var product_id = $('#divProductId').attr('data-n' );

    var category_id, brand, name, size, unit, quantity, unit_price;
    var relocation_url, div_element;
    if(type === 'insert') {

         // ajax call to get category id for category selected
        $.post('http://localhost/olmart/index.php/Welcome/get_category_id', {
                category_name: add_category_id.val()
            },
            function(data, status) {

                category_id = data;
                brand = add_brand.val();
                name = add_name.val();
                size = add_size.val();
                unit = add_unit.val();
                quantity = add_quantity.val();
                unit_price = add_unit_price.val();

                relocation_url = 'http://localhost/olmart/index.php/Welcome/insert_product_details';
                div_element = '#divError'; 

                // check if product exists before inserting
                checkProduct(relocation_url, div_element, product_id, category_id, brand, name, size, unit, quantity, unit_price);
            }
        );
    } else {

            alert('update called!');
            brand = edit_brand.val();
            name = edit_name.val();
            size = edit_size.val();
            unit = edit_unit.val();
            quantity = edit_quantity.val();
            unit_price = edit_unit_price.val();
            relocation_url = 'http://localhost/olmart/index.php/Welcome/update_product_details';
            div_element = '#divEditError';

            alert('id:'+product_id);

            // // check if product exists before updating
            checkProduct(relocation_url, div_element, product_id, category_id, brand, name, size, unit, quantity, unit_price);
    }

    return false;
}


function checkProduct(relocation_url, div_element, product_id, category_id, brand, name, size, unit, quantity, unit_price)
{
    // ajax call to verify category
    $.post('http://localhost/olmart/index.php/Welcome/is_product_exist', 
            {   
                product_id: product_id,
                category_id: category_id,
                brand: brand,
                name: name,
                size: size,
                unit: unit,
                quantity: quantity,
                unit_price: unit_price 
            },
            function(data, status) {

                if(data === 'Product doesnot exist') {
                    window.location = relocation_url;
                    
                } else {
                        showErrorMsg(div_element);                   
                }
            }
    );

}


// show error message
function showErrorMsg(div_element) {
   
    $(div_element).html("<p style='color: red'> Product already exist, check details and enter again</p>");
}
