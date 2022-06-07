const users = [{
    "id": 1,
    "email": "user1@test.com",
    "name": "User1",
    "roles": [{
            "id": 1,
            "code": "ROLE_ADMINISTRATOR",
            "name": "Administrator"
        },
        {
            "id": 2,
            "code": "ROLE_SELLER",
            "name": "Seller"

        }
    ]
}, {
    "id": 2,
    "email": "user2@test.com",
    "name": "User2",
    "roles": [{
        "id": 1,
        "code": "ROLE_ADMINISTRATOR",
        "name": "Administrator"
    }]
}, {
    "id": 3,
    "email": "user3@test.com",
    "name": "User3",
    "roles": [{
        "id": 1,
        "code": "ROLE_ADMINISTRATOR",
        "name": "Administrator"
    }]
}, {
    "id": 4,
    "email": "user4@test.com",
    "name": "User4",
    "roles": [{
            "id": 1,
            "code": "ROLE_ADMINISTRATOR",
            "name": "Administrator"
        },
        {
            "id": 2,
            "code": "ROLE_SELLER",
            "name": "Seller"

        }
    ]
}, {
    "id": 5,
    "email": "user5@test.com",
    "name": "User5",
    "roles": [{
        "id": 5,
        "code": "ROLE_LAWYER",
        "name": "Lawyer"

    }]
}, {
    "id": 6,
    "email": "user6@test.com",
    "name": "User6",
    "roles": [{
        "id": 2,
        "code": "ROLE_SELLER",
        "name": "Seller"

    }]
},
{
    "id": 7,
    "email": "user7@test.com",
    "name": "User7",
    "roles": [{
        "id": 9,
        "code": "ROLE_SLA",
        "name": "sla"
    }]
},
{
    "id": 8,
    "email": "user8@test.com",
    "name": "User8",
    "roles": [{
        "id": 8,
        "code": "ROLE_BANK",
        "name": "Bank"

    }]
},
{
    "id": 9,
    "email": "user9@test.com",
    "name": "User9",
    "roles": [{
        "id": 7,
        "code": "ROLE_CPF",
        "name": "CPF"
    }]
}
]
const filter = ['ROLE_SELLER', 'ROLE_BANK', 'ROLE_CPF', 'ROLE_SLA', 'ROLE_LDAU']

const filteredUsers = users.filter(user => !user.roles.find(role => filter.includes(role.id)))

console.log(filteredUsers)