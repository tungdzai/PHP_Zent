/*Lấy ra bản ghi có email và password;*/
select *
from unit08.hw01
where email is not NULL
and password is not null;
# Viết câu lệnh xóa user có id=5
delete
from unit08.hw01
where id = 5;
# Viết câu lệnh cập nhật mật khẩu của user có id=10
update unit08.hw01
set password="4"
where id = 10;
# 4. Viết câu lệnh lấy ra 5 bản ghi từ bản ghi số 3
select *
from unit08.hw01
limit 2,5;
# 5. Viết câu lệnh lấy ra các user có tên bắt đầu bằng chữ T
select *
from unit08.hw01 where name like "%T%";