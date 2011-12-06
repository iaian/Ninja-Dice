#!/usr/bin/env ruby

player = 1 + rand(3)
computer = 1 + rand(3)

=begin
1 = rock
2 = paper
3 = scissor
=end

player = [:paper, :scissors, :rock][rand(3)]
computer = [:paper, :scissors, :rock][rand(3)]

# define rules

#Rock
if player == :rock && computer == :rock
  result = 'Draw'
end
if player == :rock && computer == :scissors
  result = 'Lose'
end
if player == :rock && computer == :paper
  result = 'Win'
end

#Paper
if player == :scissors && computer == :rock
  result = 'Win'
end
if player == :scissors && computer == :scissors
  result = 'Draw'
end
if player == :scissors && computer == :paper
  result = 'Lose'
end

#Scissors
if player == :paper && computer == :rock
  result = 'Lose'
end
if player == :paper && computer == :scissors
  result = 'Win'
end
if player == :paper && computer == :paper
  result = 'Draw'
end

print "\nPlayer : #{player}  \n"
print "Computer : #{computer} \n"
print "\n#{result}\n\n"