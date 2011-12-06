#!/usr/bin/env ruby

player = 1 + rand(3)
computer = 1 + rand(3)

=begin
1 = rock
2 = paper
3 = scissor
=end

# Player item
if player == 1
  player_item = 'rock'
end
if player == 2
  player_item = 'paper'
end
if player == 3
  player_item = 'scissor'
end


# Computer item
if computer == 1
  comp_item = 'rock'
end
if computer == 2
  comp_item = 'paper'
end
if computer == 3
  comp_item = 'scissor'
end

# define rules

#1
if player == 1 && computer == 1
  result = 'Draw'
end
if player == 1 && computer == 2
  result = 'Lose'
end
if player == 1 && computer == 3
  result = 'Win'
end

#2
if player == 2 && computer == 1
  result = 'Win'
end
if player == 2 && computer == 2
  result = 'Draw'
end
if player == 2 && computer == 3
  result = 'Lose'
end

#3
if player == 3 && computer == 1
  result = 'Lose'
end
if player == 3 && computer == 2
  result = 'Win'
end
if player == 3 && computer == 3
  result = 'Draw'
end

print "\nPlayer : #{player}  #{player_item}\n"
print "Computer : #{computer}  #{comp_item}\n"
print "\n#{result}\n\n"