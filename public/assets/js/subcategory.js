$("#category_id").on('change', function() {
    // Fetch on this change event of category_id
    var category_id = $(this).val();

    // Fetch through ID of input
    // var category_id = $("#category_id").val();

    // Fetch through class name
    // var cat_id = $(".category_class").val();
    $.ajax({
        url: ROUTE_FETCH_SUBCATEGORY.replace(':id', category_id),
        type: "GET",
        success : function (response){
            // console.log("success ", response.html);
            $("#sub_category_id").html(response.html);
        },
        error : function (error){
            console.log(error);
        }
    });
}); 