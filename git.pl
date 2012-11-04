#! usr/bin/perl
print "Pushing git commit\n";
print "Commit MSG: ";
$commitmsg = <>;
system('git add *');
system("git commit -m '$commitmsg'");
system("git push");
print "\nFinished!";