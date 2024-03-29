class DailySheetController < ApplicationController
  def index
     begin
	@user = current_user
	calendar = params.require('daily_sheet').permit "date"
	@date = Date.new calendar['date(1i)'].to_i, calendar['date(2i)'].to_i, calendar['date(3i)'].to_i

     rescue ActionController::ParameterMissing
        @date = Date.today
     end
     @ds = @user.monthly_sheets.find_by_month(@date.at_beginning_of_month).daily_sheets.find_or_create_by date: @date
  end

  def new
     begin
	@ds = params.require('daily_sheet')
	@daily_sheet = DailySheet.find_by_id @ds.to_i
	
	unless @daily_sheet.monthly_sheet.status == 'deschis'
	   redirect_to :daily_sheet_index, :alert => 'Pontajul nu mai poate fi modificat'
	end
     rescue ActionController::ParameterMissing
	redirect_to :daily_sheet_index
     end
  end
  
  def create
     daily_sheet = params.require('daily_sheet').require('id')
     task  = params.require('task').permit 'activity', 'project_id', 'client', 'number_of_hours'
  
     p = current_user.daily_sheets.find(daily_sheet).tasks.create(task)
     if p
	p.user = current_user
	p.save
	audit "a pontat #{p.id}, #{p.number_of_hours} ore la #{p.project.name if p.project}"
	redirect_to :daily_sheet_index, alert: 'Pontaj efectuat!'
     else
	redirect_to :daily_sheet_index, alert: 'Eroare la adaugarea pontajului!'
     end
     
  end
  
  def show
     @ds = DailySheet.find_by_id params.require('id')
  end
end
