class RenameTypeToTaskTypeOnTask < ActiveRecord::Migration
  def change
     rename_column :tasks, :type, :task_type
  end
end
