select 
evaluations.id,evaluations.restaurant_id,evaluations.user_id,evaluations.rating,evaluations.content,restaurants.name as restaurant_name,users.name as user_name 
from 
evaluations 
inner join restaurants on evaluations.restaurant_id = restaurants.id 
inner join users on evaluations.user_id = users.id 
where 
users.id =  