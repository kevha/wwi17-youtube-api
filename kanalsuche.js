function yt (e, t) {
   res = e;
   for (var n = 0; n < t.length; n++) {
       res = res.replace(/\{\{(.*?)\}\}/g, function (e, r) {
           return t[n][r]
       })
   }
   return res
}

$(function () {
    $("form").on("submit", function (e) {
        e.preventDefault();
        //Anfrage vorbereiten
        var request = gapi.client.youtube.search.list({
            //Part, wo Infos hergenommen werden sollen: "snippet"
            part: "snippet",
            //Typ: channel oder video
            type: "channel",
            q: encodeURIComponent($("#search").val()),
            //Maximale Ergebnisse: 10
            maxResults: 10,
        });

        // execute the request
        request.execute(function (response) {
            var results = response.result;
            //Zugriff auf <div id="results"> damit Ergebnisse dort angezeigt werden können
            $("#results").html("");
            // Für jedes einzelne Ergebnis...
            $.each(results.items, function (index, item) {
                //... füge die einzelnen Informationen in die vorgegebenen Placeholder in kanalsuche_item.html ein
                $.get("kanalsuche_item.html", function (data) {
                    $("#results").append(yt(data, [
                        {
                        //Titel von Kanal
                        "title": item.snippet.title,
                        //ChannelID von Kanal, für Weiterleitung zum Kanal
                        "ChannelId": item.snippet.channelId,
                        //RL von Profilbild, um Bild anzuzeigen
                        "profilePicURL": item.snippet.thumbnails.default.url
                     }]));
                });
            });
        });
    });
});



function init() {
    //Key um auf API zuzugreifen
    gapi.client.setApiKey("AIzaSyCsKTmPxVHUp9o0kXMu5_gkI2XQU1ohWIA");
    gapi.client.load("youtube", "v3", function () {
    });
}
