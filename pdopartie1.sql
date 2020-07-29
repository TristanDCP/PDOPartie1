SELECT clients.firstName, clients.lastName
FROM clients

-------------

SELECT showtypes.type
FROM showtypes

---------

SELECT clients.id, clients.firstName, clients.lastName
FROM clients
WHERE clients.id <= 20

--------
SELECT  clients.firstName, clients.lastName, clients.card, cardtypes.type
FROM clients
INNER JOIN cards
ON clients.cardNumber = cards.cardNumber
INNER JOIN cardtypes
ON cards.cardTypesId = cardtypes.id
WHERE cardtypes.id = 1