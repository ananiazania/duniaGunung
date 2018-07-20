$(function() {
  $.ajax({
    type: "GET",
    url: "getAllUser/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllUser/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addUser/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "PUT",
            url: "/clients/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteUser/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "username",
          title: "Nama Pengguna",
          type: "text",
          width: 150
        },
        {
          name: "jeniskelamin",
          title: "Jenis Kelamin",
          type: "text",
          width: 50
        },
        {
          name: "alamat",
          title: "Alamat",
          type: "text",
          width: 50
        },
        {
          name: "email",
          title: "Email",
          type: "text",
          width: 50
        },
        {
          name: "password",
          title: "Password",
          type: "text",
          width: 50
        },
        {
          name: "level",
          title: "Level",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
