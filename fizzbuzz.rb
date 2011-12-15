#!/usr/bin/env ruby
# V2. Less lines

print "\n FizzBuzz cheatsheet :>o<: \n\n"

for i in (1..100)
  # To set the buzzer as i if all if's fail ( is not multiple of 3 or 5 )
  buzzer = i
  if i % 3 == 0
    # #{var} is how to integrate variables within strings
    buzzer = "#{i} fizz"
  end
  if i % 5 == 0
    buzzer = "#{i} buzz"
  end
  if i % 15 == 0
    buzzer = "#{i} fizzbuzz"
  end
  # displays buzzer and all contents
  puts "#{buzzer}"
end