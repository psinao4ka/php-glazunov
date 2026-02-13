<?php
copy('text.txt', 'dir/text.txt');
unlink ('text.txt');
echo "файл перемещен";