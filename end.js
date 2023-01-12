$(function () {
  const username = document.querySelector("#username");
  const saveScoreBtn = document.querySelector("#saveScoreBtn");
  const finalScore = document.querySelector("#finalScore");
  const mostRecentScore = localStorage.getItem("mostRecentScore");

  const highScores = JSON.parse(localStorage.getItem("highScores")) || [];
  //MIGHT BE A PROBLEM
  const MAX_HIGH_SCORES = 5;

  finalScore.innerText = mostRecentScore;
  username.addEventListener("keyup", () => {
    saveScoreBtn.disabled = !username.value;
  });
  saveHighScore = (e) => {
    e.preventDefault();
    const score = {
      score: mostRecentScore,
      name: username.value,
    };
    //alert(score.);

    var argu = JSON.stringify({
      Person_nm: score.name,
      Person_scr: score.score,
    });
    //console.log(argu);
    // alert("ok");
    $.ajax({
      url: "backend.php",
      dataType: "json",
      data: { Sending_data: argu },
      method: "post",
      success: function (data) {
        alert(data.outmsg);
      },

      error: function (data) {
        console.log(data);
        alert(data);
      },
    });

    //highScores.push(score);

    highScores.sort((a, b) => {
      return b.score - a.score;
    });
    //MIGHT BE A PROBLEM
    highScores.splice(5);

    //localStorage.setItem("highScores", JSON.stringify(highScores));
    window.location.assign("./");
  };
});
