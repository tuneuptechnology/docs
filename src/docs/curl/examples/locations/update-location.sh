curl -X PATCH https://app.tuneuptechnology.com/api/locations/{id} \
    -H "Email: EMAIL_HERE" \
    -H "Api-Key: API_KEY_HERE" \
    -d '{
            "name": "Location Name",
            "street": "123 California Ave",
            "city": "Salt Lake",
            "state": "UT",
            "zip": 84043
        }'
