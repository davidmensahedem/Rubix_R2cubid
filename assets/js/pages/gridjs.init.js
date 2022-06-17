new gridjs.Grid({
    columns:["Name","Email","Position","Company","Country"],
    pagination:{limit:1},
    sort:!0,search:!0,
    data:[
        
        ["Cathy","cathy@example.com","Customer Data Director","Ebert, Schamberger and Johnston","Mexico"],
        ["Tyrone","tyrone@example.com","Senior Response Liaison","Raynor, Rolfson and Daugherty","Qatar"]
    ]
}).render(document.getElementById("table-gridjs"));