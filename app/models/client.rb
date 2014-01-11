class Client < ActiveRecord::Base
   has_many :projects
   has_many :tasks, :through =>  :projects
end
