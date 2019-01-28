<?php

$files = include("../src/explorateur.php");
$names = array_pop($files);

foreach ($files as $key => $value)
{
	if ($key == 0)
	{
		?> <tr>
			<td><i class="fas fa-level-up-alt"></i></td>
			<td><a href="?file=parent">Parent</a></td>
			<td><?php if(empty($_GET) != 1){if($_GET["file"] == "parent"){echo $names[$key];}} ?></td>
			</tr><?php 
	} else
	{
		if ($value == "dir")
		{
			?> <tr>
			<td><i class="fas fa-folder"></i></td>
			<td><a href=<?php echo "?file=sub" . $key?>><?php echo $names[$key];?></a></td>
			<?php
			if(empty($_GET) != 1)
			{
				if($_GET["file"] == "sub" . $key)
				{
					$files = scandir("../storage/" . $names[$key]);
					foreach ($files as $key => $value)
					{
						if ($key > 2)
						{
							echo "<td>" . $value . "</td>";
						}
					}
				}
			} ?>
			</tr> <?php
		} else
		{
			?><tr>
			<td><i class="fas fa-file"></i></td>
			<td><a href="/"><?php echo $names[$key];?></a></td>
			<td><form method="POST" action="/">
				<button class="button is-light is-small" name="delete" value="<?php echo $names[$key]; ?>" type="submit"><i class="fas fa-trash-alt"></i></button>
			</form>
			</td>
			</tr>
			<?php
		}
	}	
}