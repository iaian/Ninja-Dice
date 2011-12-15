#!/usr/bin/env ruby

print "\n FizzBuzz cheatsheet :>o<: \n\n"

for i in (1..100)
  # for formatting fix
  buzzed = 0
  if i % 15 == 0 then
    print "#{i} FizzBuzz\n"
    buzzed = 1
  end
  if i % 3 == 0 then
    print "#{i} Fizz\n"
    buzzed = 1
  end
  if i % 5 == 0 then
    print "#{i} Buzz\n"
    buzzed = 1
  end
  if buzzed == 0
    puts i
  end
end