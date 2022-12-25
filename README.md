# Simtech second module

Practical work on the creation of department management functionality


---
## **Prerequisites**
---

- [Apache httpd 2.4.54 (or above)](https://httpd.apache.org/download.cgi#apache24)
- [PHP 7.4.33](https://www.php.net/downloads.php)
- [MariaDB Server 10.8.3 (or above)](https://mariadb.org/download/?t=mariadb&o=true&p=mariadb&r=10.8.3)
- [Composer 2.4.4 (or above)](https://getcomposer.org/)
- Working shop application based on [CS-Cart 4.15.2 ULTIMATE B2B](https://www.cs-cart.com/download-cs-cart.html)


---
## **Installation**
---

1. Download [`dumps/departments.zip`](https://github.com/azizbekphd/simtech_second_module/blob/departments/dumps/departments.zip)
1. Open administration panel of your shop and go to **Add-ons > Manage add-ons**
1. Click on gear icon (&#9881;) and select **Manual installation**
1. In the opened menu select **Local** and select the file you've just downloaded
1. Click **Upload & install**


---
## **Test cases**
---

Some test cases for manual testing


## Creation of a department

### Additional prerequisites:

- Two or more registered customers
- At least one registered administrator

### Steps:

1. Open administration panel in the browser
1. Go to **Customers > Departments**
1. Click on the plus icon in the top right corner
1. Enter name for the department (i.e. `Department 1`)
1. In the image field select **Local** and select any image from your computer
1. Enter description for the department (i.e. `Description of the department "Department 1"`)
1. Click **Select supervisor**, choose any administrator and click **Choose**
1. Check **I’m uploading a HiDPI image** checkbox if the image you chose had high resolution
1. (Optional) Enter any caption for the image
1. Click **Add employees**, choose at least two users and click **Add users and close**
1. Set the **Status** to **Active**
1. Click **Create** in the top right corner
1. After reloading make sure that all the fields have the data you entered
1. Go back to **Customers > Departments**
1. Make sure that the department you created is displaying in the list
1. Click on the down arrow icon (&#9660;) near the **Departments** title
1. Make sure that the name of the new department is displaying in the list of last edited items

### Expected result:

- Department is successfully created with saving all fields
- Department displayed in the list


## Deleting a department

### Additional prerequisites:

- Several created departments (at least 3)

### Steps:

1. Open administration panel in the browser
1. Go to **Customers > Departments**
1. There are two ways to delete a department:
    - Single deletion:
        1. Hover on any department in the list, click on gear icon (&#9881;) and select **Delete**
        1. Make sure that the department disappeared from the list
    - Multiple deletion:
        1. Select two or more departments from the list _(selected items are highlighted in blue)_
        1. Make sure that now there is a context menu on the top of the list
        1. Select **Actions > Delete selected**
        1. Make sure that selected items disappeared from the list

### Expected result:

- Departments are successfully deleted both ways


## Viewing a list of employees in the storefront

### Additional prerequisites:

- At least one created department with at least two employees
- Being logged in the storefront

### Steps:

1. Open `<shop domain>/index.php?dispatch=departments.view` in the browser
1. Click on the logo or name of any department in the list
1. Make sure that there is a list of employees with full names and emails under the description
1. Click on the email of any employee
1. Make sure it opens the mail client and specifies the selected employee as the recipient

### Expected result:

- List of the employees is displaying on the department details page without any errors


---
## **Bug reports**
---


## Image isn't saved

### Steps to reproduce:

1. Open administration panel in the browser
1. Go to **Customers > Departments**
1. Hover on any department in the list, click on gear icon (&#9881;) and select **Edit**
1. Attach any image to the image picker by any of the supported ways
1. Click **Save**

### Expected result:

- The image is saved and displayed both in the admin panel and in the storefront

### Actual result:

- The image is not saved and is not displayed in either the admin panel or the storefront


## Context menu isn't displaying

### Steps to reproduce:

1. Open administration panel in the browser
1. Go to **Customers > Departments**
1. Select at least one department from the list _(selected items are highlighted in blue)_

### Expected result:

- A context menu is displayed above the list

### Actual result:

- The context menu was not displayed above the list


## Departments are not splitted into columns

### Steps to reproduce:

1. Open `<shop domain>/index.php?dispatch=departments.view` in the browser

### Expected result:

- Departments are splitted into 2 or 3 columns

### Actual result:

- All departments are displayed in one column