<?php
$files = scandir("../storage/");
foreach ($files as $key => $value)
{
	if ($key == 1)
	{
		?> <tr>
			<td><i class="fas fa-level-up-alt"></i></td>
			<td><a href="?file=parent">Parent</a></td>
			<td><?php if(empty($_GET) != 1){if($_GET["file"] == "parent"){echo basename("../storage/");}} ?></td>
			</tr><?php 
	} else if ($key > 2)
	{
		$path = "../storage/" . $value;
		if (is_dir($path))
		{
			?> <tr>
			<td><i class="fas fa-folder"></i></td>
			<td><a href=<?php echo "?file=sub" . $key?>><?php echo $value;?></a></td>
			<?php
			if(empty($_GET) != 1)
			{
				if($_GET["file"] == "sub" . $key)
				{
					$files = scandir("../storage/" . $value);
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
			<td><a href="/"><?php echo $value;?></a></td>
			<td><form method="POST" action="/">
				<button class="button is-light is-small" name="delete" value="<?php echo $value; ?>" type="submit"><i class="fas fa-trash-alt"></i></button>
			</form>
			</td>
			</tr>
			<?php
		}	
	}	
}

?>