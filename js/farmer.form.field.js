//form validation

$(document).ready(function(e){
  //variables
  var html = ' <p><div><label for="crop" class="crop">Crop Name and Time of Harvest</label> <br> <input type="text" name="crop[]" id="childcrop" style="width:61%;">&emsp; <input type="date" name="harvest[]" id="childharvest"> <a  id="remove">Remove</a></div></p>';
  var maxrows = 5;
  var x = 1;

  //add rows to form
  $("#addmore").click(function(e){
    if (x<=maxrows) {
    $("#formcontainer").append(html);
    x++;
    }
  });

  //remove rows from form
  $("#formcontainer").on('click','#remove',function(e){
    $(this).parent('div').remove();
    x--;
  });

  //populates values from the rows
   $("#formcontainer").on('dblclick','#childcrop',function(e){
     $(this).val( $ ('#crop').val() );
   });

   $("#formcontainer").on('dblclick','#childharvest',function(e){
     $(this).val( $ ('#harvest').val() );
   });

});
