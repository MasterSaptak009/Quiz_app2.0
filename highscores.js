$(function () {
  // .map((score) => {
  //   return `<li class="high-score">${score.name} - ${score.score}</li>`;
  // })
  // .join("");

  var argu = JSON.stringify({
    Person_nm: 10,
  });
  // alert("koko");
  $.ajax({
    url: "backend.php",
    dataType: "json",
    data: { give_h: argu },
    method: "post",
    success: function (data) {
      var ii = data.rows;

      for (var i = 1; i <= ii; i++) {
        h = "c" + i;

        var P_name = data[h]["P_name"];
        var ff = data[h]["sc"];
        //alert(P_name, score);
        $("#h_s").append(
          '<p style="font-size:16px">' + P_name + " : " + ff + "</p>"
        );
      }
    },

    error: function (data) {
      console.log(data);
      alert(data);
    },
  });
});
