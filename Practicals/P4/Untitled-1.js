db.createCollection("players");
db.players.insert({PlayerTag:"Daddy_COol",PlayerName:"Ruan",PlayerSurname:"Kruger",kills:0,kd:1,mvp:0});
db.players.find();
db.players.update({PlayerTag:"Daddy_COol"},{PlayerTag:"Daddy_COolv3",kills:10});
db.players.remove({kills:0});