curl -X POST https://app.tuneuptechnology.com/api/tickets \
    -H "Email: EMAIL_HERE" \
    -H "Api-Key: API_KEY_HERE" \
    -d '{
            "customer_id": 1,
            "ticket_type_id": 1,
            "serial": "10000",
            "user_id": 1,
            "notes": "here are some notes",
            "title": "Fancy Title",
            "status": 1,
            "device": "2",
            "imei": 10000,
            "location_id": 1
        }'
