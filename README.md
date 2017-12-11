# Set in Magento Sage Order ID
Assign Sage OrderID with Magento 2 OrderID

#Get Admin token

Endpoint

POST http://<host>/rest/default/V1/integration/admin/token

Headers

Content-Type: application/json
Authorization: Bearer <token>


Payload
{
"username": "<admin username>",
"password": "<admin password>"
}



#Set SageOrderId

PUT http://<host>/rest/V1/sage/<order id>

BODY:
{ "entity":{"sage_order_id":"<Sage Order ID>"}}


#Set Template

copy file from: /vendor/magento/module-sales/view/adminhtml/templates/order/view/info.phtml
to: app/design/adminhtml/Magento/blank/Magento_Sales/templates/order/view/info.phtml


#Get SageOrderId

GET http://<host>/rest/V1/sage/<order id>