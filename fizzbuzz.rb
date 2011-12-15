#!/usr/bin/env ruby

print "\n FizzBuzz cheatsheet :>o<: \n\n"

for i in (1..100)
  # for formatting fix, probably a better way to do this..
  buzzed = 0
  
  # this i % 3 == 0 part took me a bit to discover.. 
  # basically it devides and checks for a remander, a good thing to learn about. 
  
  if i % 15 == 0
    print "#{i} FizzBuzz\n"
    buzzed = 1
  end
  if i % 3 == 0
    print "#{i} Fizz\n"
    buzzed = 1
  end
  if i % 5 == 0
    print "#{i} Buzz\n"
    buzzed = 1
  end
  
  # checks if a label has been added, if not put i. 
  if buzzed == 0
    puts i
  end
end