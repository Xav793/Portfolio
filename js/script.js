/***** Script Nutriscore */

$(".buttonCode").on("click", function () {
  let codeBar = $(".codeBarre").val();

  if (codeBar == "") {
    $(".msg").css("display", "flex");
    $("#affichage").css("display", "none");
    $(".modalAccueil").css("display", "none");
    $(".search").css("display", "block");
  } else {
    $.get(
      "https://world.openfoodfacts.org/api/v0/product/" + codeBar + ".json",
      function (datas) {
        console.log(datas.product);
        $(".msg").css("display", "none");
        $("#affichage").css("display", "flex");
        $("#affichage").addClass("zoomIn");
        $("#nom").text(datas.product.product_name);

        $("#marque").text(datas.product.brands);

        $(".imageProduit").attr("src", datas.product.image_front_small_url);

        $("#nutriscore").html(
          '<img src="https://static.openfoodfacts.org/images/attributes/nutriscore-' +
            datas.product.nutrition_grades_tags +
            '.svg"/>'
        );

        $("#description").text(datas.product.generic_name_fr);
      }
    );
  }
});
