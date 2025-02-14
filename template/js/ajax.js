

// $(".btn_3").click(function () {
//     $.ajax({
//         url: "/catalog/more",
//         type: "POST",
//         data: { key: "value" },
//         success: function (response) {
//             console.log(response);
//         },
//         error: function (xhr, status, error) {
//             console.error("Ошибка:", error);
//         }
//     });
// });



$("#search_catalog").on("change", function () {
    $.ajax({
        url: "/catalog/search",
        type: "POST",
        data: { key: "value" },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error("Ошибка:", error);
        }
    });
});

$(".add_to_cart_ajax").on("click", function (e) {
    e.preventDefault()
    const count = $('.product_count_item.input-number').val()
    if(count == 0){
        return false
    }
    $.ajax({
        url: "/catalog/ajaxAdd/1",
        type: "POST",
        data: { key: "value" },
        success: function (response) {
            console.log(response);
        }
    });
});