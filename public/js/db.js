 var request = indexedDB.open("logs");

request.onupgradeneeded = function() {
  // The database did not previously exist, so create object stores and indexes.
  var db = request.result;
  var store = db.createObjectStore("user", {keyPath: "email"});
  var userIndex = store.createIndex("by_name", "name", {unique: true});

  // Populate with initial data.
  store.put({name: window.App.user.name, email: window.App.user.email, type: window.App.user.type});
};

request.onsuccess = function() {
  db = request.result;
};