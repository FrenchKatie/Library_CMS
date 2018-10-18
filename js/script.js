$(document).ready(function(){
    $("input[name=author]").keyup(function(){
        var value = $(this).val();

        $.ajax({
            type: "get",
            url: "api/listauthors.php",
            data: {
                inputValue: value
            },
            success: function(dataFromAPI){
                console.log(dataFromAPI);
                $("#autocomplete-authors").empty();
                if (dataFromAPI) {
                    for (var i = 0; i < dataFromAPI.length; i++) {
                        $("#autocomplete-authors").append("<div>" + dataFromAPI[i].author_name + "</div>");
                    }
                    $("#autocomplete-authors").show();
                } else {
                    $("#autocomplete-authors").hide();
                }
            },
            error: function(){
                console.log("ERROR! Something went wrong, can't connect to the API");
            }

        });

    });
});

$(document).on("click", "#autocomplete-authors div", function(){
    var value = $(this).text();
    $("input[name='author']").val(value);
    $("#autocomplete-authors").empty().hide();
});
