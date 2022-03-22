curl -X POST https://app.tuneuptechnology.com/api/inventory \
    -H "Email: EMAIL_HERE" \
    -H "Api-Key: API_KEY_HERE" \
    -d '{
            "name": "Inventory Item",
            "inventory_type_id": 1,
            "part_number": "1234",
            "sku": "1234",
            "notes": "here are some notes",
            "part_price": 19.99,
            "location_id": 1,
            "quantity": 1
        }'
