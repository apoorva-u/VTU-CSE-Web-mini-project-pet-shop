$(document).ready(function() {
    var mail = sessionValue;
    console.log(mail);

    $("form").submit(function (event) {
       event.preventDefault();
      
       var housename = $('#HouseName');
       var street = $('#Street');
       var area = $('#Area');
       var city = $('#City');
       var district = $('#District');
       var state = $('#State');
       var country = $('#Country');
       console.log("about to post");
       $.post("add-address",{
         mail,
         housename:housename.val(),
         street:street.val(),
         area:area.val(),
         city:city.val(),
         district:district.val(),
         state:state.val(),
         country: country.val()
       }).done(function (data,status) {

         var alertBox =  $("<div></div>").text("Address has been added.");
					alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
					alertBox.attr("role","alert");
					let aTag = $('<a class="ms-md-5" href="/pawsome/cart">Click here proceed!</a>');
					alertBox.append(aTag);
					var button = $("<button></button>");
					button.addClass("btn-close  text-center text-success");
					button.attr({
						"type":'button',
						"data-bs-dismiss":"alert",
						"aria-label":'Close',
					});
					alertBox.append(button);
          $('nav').after(alertBox);
          window.location.replace("cart");
       })
          
     })
     
   })
   