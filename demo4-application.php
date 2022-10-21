<html>
<head><title>My Looping statements</title></head>

application 1

for ($x = 0; $x < 11; $x++) 
{
  if ($x == 11) 
  {
    break;
  }
  echo "Hello $x <br>";
}

application 2

//lets try 2
echo "displaying integers less than 10 but not less than 3"."<br>";
for($x=1;$x<10;++$x)
{	if($x<=2)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}