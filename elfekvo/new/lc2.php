<?php
/**
* example of use:
*/
$d = new RecDir("./",false);
$linePHPSum=0;
$lineCFGSum=0;
$lineJSSum=0;
$lineCSSSum=0;
$lineHTMLSum=0;
while (false !== ($entry = $d->read())) {
	if (!empty(strpos($entry,'.php'))) {
		$linePHP = 0;
		$handle = fopen($entry, "r");
		while(!feof($handle)){
			$line = fgets($handle);
			$linePHP++;
		}
//		echo $entry.' => '.$linePHP.'<br>';
		$linePHPSum += $linePHP;
	} else if (!empty(strpos($entry,'.cfg'))) {
		$lineCFG = 0;
		$handle = fopen($entry, "r");
		while(!feof($handle)){
			$line = fgets($handle);
			$lineCFG++;
		}
//		echo $entry.' => '.$lineCFG.'<br>';
		$lineCFGSum += $lineCFG;
	} else if (!empty(strpos($entry,'.js'))) {
		$lineJS = 0;
		$handle = fopen($entry, "r");
		while(!feof($handle)){
			$line = fgets($handle);
			$lineJS++;
		}
//		echo $entry.' => '.$lineJS.'<br>';
		$lineJSSum += $lineJS;
	} else if (!empty(strpos($entry,'.css'))) {
		$lineCSS = 0;
		$handle = fopen($entry, "r");
		while(!feof($handle)){
			$line = fgets($handle);
			$lineCSS++;
		}
//		echo $entry.' => '.$lineCSS.'<br>';
		$lineCSSSum += $lineCSS;
	} else if (!empty(strpos($entry,'.html'))) {
		$lineHTML = 0;
		$handle = fopen($entry, "r");
		while(!feof($handle)){
			$line = fgets($handle);
			$lineHTML++;
		}
//		echo $entry.' => '.$lineHTML.'<br>';
		$lineHTMLSum += $lineHTML;
	}

}
?>
<table border=2>
<tr><td><?php echo 'PHP sorok: '; ?></td><td align="right"><?php echo $linePHPSum; ?></td></tr>
<tr><td><?php echo 'CFG sorok: '; ?></td><td align="right"><?php echo $lineCFGSum; ?></td></tr>
<tr><td><?php echo 'JS sorok: '; ?></td><td align="right"><?php echo $lineJSSum; ?></td></tr>
<tr><td><?php echo 'CSS sorok: '; ?></td><td align="right"><?php echo $lineCSSSum; ?></td></tr>
<tr><td><?php echo 'HTML sorok: '; ?></td><td align="right"><?php echo $lineHTMLSum; ?></td></tr>
<tr><td><?php echo 'Összesen sorok: '; ?></td><td align="right"><?php echo ($linePHPSum+$lineCFGSum+$lineJSSum+$lineCSSSum+$lineHTMLSum); ?></td></tr>
</table>
<?php
$d->close();

class RecDir
{
   protected $currentPath;
   protected $slash;
   protected $rootPath;
   protected $recursiveTree;  

   function __construct($rootPath,$win=false)
   {
      switch($win)
      {
         case true:
            $this->slash = '\\';
            break;
         default:
            $this->slash = '/';
      }
      $this->rootPath = $rootPath;
      $this->currentPath = $rootPath;
      $this->recursiveTree = array(dir($this->rootPath));
      $this->rewind();
   }

   function __destruct()
   {
      $this->close();
   }

   public function close()
   {
      while(true === ($d = array_pop($this->recursiveTree)))
      {
         $d->close();
      }
   }

   public function closeChildren()
   {
      while(count($this->recursiveTree)>1 && false !== ($d = array_pop($this->recursiveTree)))
      {
         $d->close();
         return true;
      }
      return false;
   }

   public function getRootPath()
   {
      if(isset($this->rootPath))
      {
         return $this->rootPath;
      }
      return false;
   }

   public function getCurrentPath()
   {
      if(isset($this->currentPath))
      {
         return $this->currentPath;
      }
      return false;
   }
  
   public function read()
   {
      while(count($this->recursiveTree)>0)
      {
         $d = end($this->recursiveTree);
         if((false !== ($entry = $d->read())))
         {
            if($entry!='.' && $entry!='..')
            {
               $path = $d->path.$entry;
              
               if(is_file($path))
               {
                  return $path;
               }
               elseif(is_dir($path.$this->slash))
               {
                  $this->currentPath = $path.$this->slash;
                  if($child = @dir($path.$this->slash))
                  {
                     $this->recursiveTree[] = $child;
                  }
               }
            }
         }
         else
         {
            array_pop($this->recursiveTree)->close();
         }
      }
      return false;
   }

   public function rewind()
   {
      $this->closeChildren();
      $this->rewindCurrent();
   }

   public function rewindCurrent()
   {
      return end($this->recursiveTree)->rewind();
   }
}
?>
<?php
// best small recurcive dir()
// $entry[0]!='.'  <=== specifically to protect FTP files with a  dot '.' as first  carractere
// return :
// download\file\text\test.txt;
// download\video\anime\test.mp4;
// download\video\film\test2.mkv;
/*
echo rdir('download'); // start dir in \\download

function rdir($path='',$k='') {   
    $d = dir($path);
        while (false !== ($entry = $d->read())) {
            if($entry[0]!='.') {
                if(is_dir($path . '\\' . $entry)) {
                    $k = rdir($k,$path . '\\' . $entry);
                }
                else {
                    $k .= $path . '\\' . $entry . "; \n" ;
                }
               
            }
        }
    $d->close();   
    return $k;   
}
*/
?>