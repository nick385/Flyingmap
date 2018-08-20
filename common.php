<?php
function user_name($id)
{
	$query="select user_name from soc_user where user_id='".$id."'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	echo $row['user_name'];
}

function user_det($id,$field)
{
	$query="select ".$field." from soc_user where user_id='".$id."'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	return $row[$field];
}
function user_img($id)
{
	if(user_det($id,"user_img")=="")
	{
		if(user_det($id,"user_gender")=='1')
		{
			return "noimagemale.jpg";
		}
		else
		{
			return "noimagefemale.jpg";
		}
	}
	else
	{
		return user_det($id,"user_img");
	}
}

function city($id)
{
	$query="select * from soc_city where city_id='".$id."'";
	$row=mysql_fetch_assoc(mysql_query($query));
	echo $row['city_name'].", ".$row['city_state'];
}

function gender($id)
{
	if($id=='1')
	{
	echo "Male";
	}
	else
	{
	echo "Female";
	}
}
?>