# 💡 Fetch API CRUD Example (PHP + MySQL)

تطبيق تعليمي بسيط يُظهر كيفية التعامل مع نموذج (Form) باستخدام **Fetch API** بدلًا من AJAX أو إعادة تحميل الصفحة، مع تنفيذ عمليات **CRUD** كاملة باستخدام **PHP** و**MySQL**.

---

## 🚀 الميزات

- إرسال النموذج بدون إعادة تحميل الصفحة (Fetch API)
- إضافة، تعديل، حذف، عرض بيانات الموظفين
- واجهة عربية بتصميم بسيط وجذاب (ألوان بيج/برتقالي)
- نموذج منبثق Modal لسهولة الاستخدام
- استجابة مباشرة للتعديلات والحذف

---

## 🛠️ التقنيات المستخدمة

- 🖼️ HTML + CSS + JavaScript (Fetch)
- 🐘 PHP (Back-End)
- 🐬 MySQL (قاعدة البيانات)
- 🗃️ PDO (للحماية من SQL Injection)

---

## ⚙️ طريقة التشغيل

### 1. أنشئ قاعدة البيانات

استخدم الملف التالي لإنشاء قاعدة البيانات:

```sql
-- employees.sql
CREATE DATABASE employees CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE employees;

CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  dob DATE,
  specialty VARCHAR(100),
  married ENUM('متزوج', 'أعزب'),
  children INT
);
