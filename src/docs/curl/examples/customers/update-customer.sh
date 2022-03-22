curl -X PATCH https://app.tuneuptechnology.com/api/customers/{id} \
    -H "Email: EMAIL_HERE" \
    -H "Api-Key: API_KEY_HERE" \
    -d '{
            "firstname": "Jake",
            "lastname": "Peralta",
            "email": "jake@example.com",
            "phone": "8015551234",
            "user_id": 1,
            "notes": "Believes he is a good detective.",
            "location_id": 1
        }'
