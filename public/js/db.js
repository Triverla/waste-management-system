var request = indexedDB.open("logs");
var garbage_weight = document.getElementById("garbage_weight");

request.onupgradeneeded = function () {
  // The database did not previously exist, so create object stores and indexes.
  var db = request.result;
  var store = db.createObjectStore("user", { keyPath: "email" });
  var garbage = db.createObjectStore("garbage_history", { keyPath: "weight" });
  var userIndex = store.createIndex("by_name", "name", { unique: true });

  // Populate with initial data.
  store.put({
    name: window.App.user.name,
    email: window.App.user.email,
    type: window.App.user.type,
  });
  if (garbage_weight.value != null) {
    garbage.put({ weight: garbage_weight.value, user_id: window.App.user.id });
  }
};

request.onsuccess = function () {
  db = request.result;
};
