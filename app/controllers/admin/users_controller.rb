class Admin::UsersController < ApplicationController
  def index
    @users = User.all
  end

  def new
    
  end

  def create
    p = params.require 'user'
    p p
    User.create! name: p
    redirect_to :index
  end

  def edit
  end
end
