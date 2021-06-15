select 
reservations.id,reservations.user_id,reservations.restaurant_id,reservations.date,reservations.time,reservations.number,users.name as user_name,restaurants.name as restaurant_name 
from 
reservations 
inner join users on reservations.user_id = users.id 
inner join restaurants on reservations.restaurant_id = restaurants.id 
where 
user_id = 