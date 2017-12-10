# Set in Magento Sage Order ID
Assign Sage OrderID with Magento 2 OrderID

#Get Admin token

Endpoint

POST http://<host>/rest/default/V1/integration/admin/token

Headers

Content-Type application/json


Payload
{
"username": "admin",
"password": "123123q"
}



#Set SageOrderId

POST http://<host>/rest/V1/sage/<order id>

{ "entity":{"sage_order_id":1111111}}

