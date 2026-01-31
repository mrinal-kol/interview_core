<html>
<body>
   <section class="ibpage__articles">
      <article>
        <p><strong>Introduction to MySQL:</strong></p><p>MySQL is an open-source relational database management system (RDBMS). It runs on the web as well as on the server. MySQL is fast, reliable, and easy to use. It is open-source software. MySQL uses standard <a href="https://www.interviewbit.com/sql-interview-questions/" rel="">SQL</a> and compiles on a number of platforms. It is a multithreaded, multi-user SQL database management system.</p><p>The data in a <a href="https://www.interviewbit.com/blog/mysql-commands/" target="_blank" rel="">MySQL</a> database is stored in the form of tables. A table is a collection of related data, and it consists of columns and rows.</p><p><a href="https://www.interviewbit.com/blog/mysql-features/" target="_blank" rel="">MySQL </a>has stand-alone clients that allow users to interact directly with a MySQL database using SQL, but more often MySQL is used with other programs to implement applications that need relational database capability.</p><p>MySQL has more than 11 million installations.</p>
      </article>

<br>
      1. Add a new column: <br>
Code <br>

ALTER TABLE table_name
ADD column_name datatype [constraints]; <br>
Example: <br>
Code <br>

ALTER TABLE Employees
ADD DateOfBirth DATE;
<br>
2. Modify an existing column: <br>
Code <br>

ALTER TABLE table_name
MODIFY COLUMN column_name new_datatype [new_constraints]; <br>
Example: <br>
Code <br>

ALTER TABLE Products
MODIFY COLUMN Price DECIMAL(10, 2) NOT NULL;
<br>
3. Rename a column: <br>
Code <br>

ALTER TABLE table_name
CHANGE COLUMN old_column_name new_column_name column_definition;
<br>
Example:
Code <br>

ALTER TABLE Customers
CHANGE COLUMN Name CustomerName VARCHAR(100);
<br>
4. Drop a column: <br>
Code <br>

ALTER TABLE table_name
DROP COLUMN column_name;
Example:
Code

ALTER TABLE Orders
DROP COLUMN ShippingAddress;
<br>
5. Add a Primary Key: <br>
Code <br>

ALTER TABLE table_name
ADD PRIMARY KEY (column_name);
<br>
6. Add a Foreign Key: <br>
Code <br>

ALTER TABLE table_name
ADD CONSTRAINT fk_name
FOREIGN KEY (column_name)
REFERENCES parent_table (parent_column);
<br>
7. Rename a table: <br>
Code <br>

ALTER TABLE old_table_name
RENAME TO new_table_na
    <br>
  <div
    data-scroll-id="0"
    data-scroll-identifier="each-article-section"
    id="mysql-basic-questions"
  >
    <h2>Basic MySQL Interview Questions</h2>

        <section class="ibpage-article-header" id="mysql-string-data-types">
          <h3>1. What are the String Data Types in MySQL?</h3>
          <article class="ibpage-article">
            <figure class="table"><table>
<thead><tr>
<th>Type Name</th>
<th>Meaning</th>
</tr></thead>
<tbody>
<tr>
<td>CHAR</td>
<td>fixed-length nonbinary(character) string</td>
</tr>
<tr>
<td>VARCHAR</td>
<td>variable-length nonbinary string</td>
</tr>
<tr>
<td>BINARY</td>
<td>fixed-length binary string</td>
</tr>
<tr>
<td>VARBINARY</td>
<td>variable-length binary string</td>
</tr>
<tr>
<td>TINYBLOB</td>
<td>Very small BLOB(binary large object)</td>
</tr>
<tr>
<td>BLOB</td>
<td>Small BLOB</td>
</tr>
<tr>
<td>MEDIUMBLOB</td>
<td>Medium-sized BLOB</td>
</tr>
<tr>
<td>LONGBLOB</td>
<td>Large BLOB</td>
</tr>
<tr>
<td>TINYTEXT</td>
<td>A very small nonbinary string</td>
</tr>
<tr>
<td>TEXT</td>
<td>Small nonbinary string</td>
</tr>
<tr>
<td>MEDIUMTEXT</td>
<td>Medium-sized nonbinary string</td>
</tr>
<tr>
<td>LONGTEXT</td>
<td>Large nonbinary string</td>
</tr>
<tr>
<td>ENUM</td>
<td>An enumeration; each column value is assigned, one enumeration member</td>
</tr>
<tr>
<td>SET</td>
<td>A set; each column value is assigned zero or more set members</td>
</tr>
<tr>
<td>NULL</td>
<td>NULL in SQL is the term used to represent a missing value. A NULL value in a table is a value in a field that appears to be blank. This value is different than a zero value or a field that contains spaces.</td>
</tr>
</tbody>
</table></figure>
          </article>
        </section>
          
  <div class="ib-articles-asset study_plan">
      <img
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/mobile/study_plan-bf1728cccc109be1b27549ae18f4571495aaa096b70f313c8232292849f9b07c.svg.gz"
        class="ib-articles-asset__img ib-articles-asset__img--mobile">
    <img
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/desktop/study_plan-fb58ec94dd27940f470d62dee6d85c8161f6afc2b9dcbced18278212ce50b8b9.svg.gz"
      class="ib-articles-asset__img ib-articles-asset__img--study_plan">
    <div
      data-class="ib-articles-asset-content-study_plan"
      class="ib-articles-asset__content"
    >
      <div class="ib-articles-asset__title-container">
        <span class="ib-articles-asset__title"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--highlighted">
          Create a free personalised study plan
        </span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile ib-articles-asset__title--highlighted">
          Create a FREE custom study plan
        </span>
      </div>
      <div class="ib-articles-asset__description">
        Get into your dream companies with expert guidance
      </div>
      <div class="ib-articles-asset__description ib-articles-asset__description--mobile">
        Get into your dream companies with expert..
      </div>
      <div class="ib-articles-asset__keypoints">
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/code-99b8ddab28469d3e18187c7e7f62dcf921ece612e63043b7515547d441ea3ebb.svg.gz">
            Real-Life Problems
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/suitcase-7129128344fb59d27c28914ce39a52b40df37b3da954c23330359726019a8fb7.svg.gz">
            Prep for Target Roles
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/pencil-aaf6423aa93927b3965ae3006bc88653f14fee9586297e82fa1153ab475c8459.svg.gz">
            Custom Plan Duration
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/calendar-blank-fd5b0a13bc91a3876224b83db892e456e05f669a469dbe4f3d62a6600836c79c.svg.gz">
            Flexible Plans
          </div>
      </div>
    </div>
      <div class="ib-articles-asset__action">
        <a
          data-class="articles-asset-touchpoint"
          data-gtm-text="Create My Plan"
          data-gtm-section="study_plan"
          href="/interview-preparation-kit/"
          class="ib-articles-asset__btn">
          Create My Plan
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/arrow-right-54a813c1b9b6df712c72a314c89081e5a96674ee7ee6454dd7c063d0fe79bb1c.svg.gz">
        </a>
      </div>
  </div>

        <section class="ibpage-article-header" id="mysql-add-users">
          <h3>2. How to add users in MySQL?</h3>
          <article class="ibpage-article">
            <p>You can add a User by using the CREATE command and specifying the necessary credentials. For example:</p><pre><code class="language-plaintext hljs">CREATE USER ‘testuser’ IDENTIFIED BY ‘sample password’;</code></pre><p> </p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-blob">
          <h3>3. What is BLOB in MySQL?</h3>
          <article class="ibpage-article">
            <p>BLOB is an acronym that stands for a binary large object. It is used to hold a variable amount of data.<br>There are four types of BLOB:</p><ul>
<li>TINYBLOB</li>
<li>BLOB</li>
<li>MEDIUMBLOB</li>
<li>LONGBLOB</li>
</ul><p>A BLOB can hold a very large amount of data. For example - documents, images, and even videos. You could store your complete novel as a file in a BLOB if needed.</p>
          </article>
        </section>
          <div class="ibpage__download-container">
  <div class="ibpage__download-banner">
    <div class="ibpage__download-text">
      <i class="icon-bell"></i>
      <span>
        You can download a PDF version of Mysql Interview Questions.
      </span>
    </div>
    <div class="ibpage__download-action">
      
<a
  class=" hidden ibpage__downloadable-a ibpage__downloadable download-pdf gtm-track-element"
  data-source="in_content"
  data-gtm-text="Download PDF"
  data-gtm-allowed-actions="click"
  data-gtm-parent="Download PDF"
  data-gtm-section="in_content"
>
  <span>
    <img class="ibpage__downloadable-img" 
      width="24" height="24" 
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
    >
  </span>

  <span class=" text">
    Download PDF
  </span>
</a>

<a
  class="auth-trigger gtm-track-element hidden ibpage__downloadable ibpage__downloadable-a enforce-signin "
  style=""
  href=javascript:void(0)
  data-trigger="ibpp-auth-flow"
  data-action="flow-trigger"
  data-target="auth"
  data-mode="login"
  data-gtm-element="Download PDF"
  data-gtm-allowed-actions="click hover"
  data-source="in_content"
>
  
  <span>
    <img
      class="ibpage__downloadable-img" 
      width="24" height="24"
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
      data-gtm-section="pdf"
      data-gtm-element="Download PDF"
    >
  </span>
  <span
    class=" text"
    data-gtm-section="pdf"
    data-gtm-text="Download PDF"
    data-gtm-element="Download PDF"
  >
    Download PDF
  </span>

</a>

<a id="auto-download-modal-trigger" data-id="" data-parent="" class="modal-trigger hidden gtm-track-element" data-gtm-allowed-actions="click" data-gtm-text="" data-gtm-type="button" data-gtm-parent="auto-download-modal" data-gtm-section="auto-download-modal" data-action="modal-open" data-target="auto-download-modal" data-gtm-tracking-allowed="" onclick="">
  
  &nbsp;

</a>
<div id="auto-download-modal" class="sr-modal  " data-gtm-section="" data-logged-in="false">
  <div class="sr-modal__content sr-modal__content--center ">
    <div class="sr-modal__body ">
      
  <div class="p-h-10 p-v-10 gtm-track-element">
    <div
      class="row"
      style="justify-content: space-between;  align-items: center;"
    >
      <h3>Download PDF</h3>
      <a class="sr-modal__close" data-target="auto-download-modal" data-action="modal-close">
        <i class="icon-close"></i>
      </a>
    </div>
    <hr />
    <div class="m-v-10 text-center">
      Your requested download is ready!<br>
      Click
      <a
        class="pointer gtm-track-element"
        data-source="in_content"
        data-action="start-download"
        data-gtm-section="pdf"
        data-gtm-element="here"
        data-gtm-text="Download PDF"
        data-gtm-allowed-actions="click"
      >
        here
      </a>
      to download.
    </div>
  </div>

    </div>
  </div>
</div>

    </div>
  </div>
</div>

        <section class="ibpage-article-header" id="mysql-temporal-data-types">
          <h3>4. What are the Temporal Data Types in MySQL?</h3>
          <article class="ibpage-article">
            <figure class="table"><table>
<thead><tr>
<th>Type Name</th>
<th>Meaning</th>
</tr></thead>
<tbody>
<tr>
<td>DATE</td>
<td>A date value, in ' CCYY-MM-DD ' Format</td>
</tr>
<tr>
<td>TIME</td>
<td>A Time value, in ' hh : mm :ss ' format</td>
</tr>
<tr>
<td>DATETIME</td>
<td>Date and time value, in ' CCYY-MM-DD hh : mm :ss ' format</td>
</tr>
<tr>
<td>TIMESTAMP</td>
<td>A timestamp value, in ' CCYY-MM-DD hh : mm :ss ' format</td>
</tr>
<tr>
<td>YEAR</td>
<td>A year value, in CCYY or YY format</td>
</tr>
</tbody>
</table></figure><p>Example: To select the records with an Order Date of "2018-11-11" from a table:</p><pre><code class="language-plaintext hljs">SELECT * FROM Orders WHERE OrderDate='2018-11-11'</code></pre>
          </article>
        </section>
        <section class="ibpage-article-header" id="what-is-mysql">
          <h3>5. What is MySQL?</h3>
          <article class="ibpage-article">
            <p>MySQL is a database management system for web servers. It can grow with the website as it is highly scalable. Most of the websites today are powered by MySQL.</p>
          </article>
        </section>
            <div class="ib-articles-scaler-courses">

  <div class="tracks-page-section-topics-courses m-v-20">
    <h2 class="tracks-page-section-topics-courses__heading">
      <img
        class="tracks-page-section-topics-courses__heading-icon"
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/monitor-play-834f8d9483abe09ad7c1d6449d2f7d188030cb9cef5137e09a374ce4a61cbbfd.svg.gz"
      >
      Learn via our Video Courses
    </h2>
    <div class="tracks-page-section-topics-courses__carousel-container">
      <div class="tracks-page-section-topics-courses__carousel-nav">
        <button
          data-class="scaler-topics-course-carousel-left"
          class="tracks-page-section-topics-courses__carousel-btn"
        >
          <i class="icon-chevron-left"></i>
        </button>
        <button
          data-class="scaler-topics-course-carousel-right"
          class="tracks-page-section-topics-courses__carousel-btn"
        >
          <i class="icon-chevron-right"></i>
        </button>
      </div>
      <div 
        class="tracks-page-section-topics-courses__container"
        data-class="scaler-topics-course-carousel"
      ></div>
    </div>
  </div>
</div>

        <section class="ibpage-article-header" id="mysql-numeric-data-types">
          <h3>6. What are the Numeric Data Types in MySQL?</h3>
          <article class="ibpage-article">
            <p>MySQL has numeric data types for integer, fixed-point, floating-point, and bit values, as shown in the table below. Numeric types can be signed or unsigned, except BIT. A special attribute enables the automatic generation of sequential integer or floating-point column values, which is useful for applications that require a series of unique identification numbers.</p><figure class="table"><table>
<thead><tr>
<th>Type Name</th>
<th>Meaning</th>
</tr></thead>
<tbody>
<tr>
<td>TINYINT</td>
<td>Very Small Integer</td>
</tr>
<tr>
<td>SMALLINT</td>
<td>Small Integer</td>
</tr>
<tr>
<td>MEDIUMINT</td>
<td>Medium-sized Integer</td>
</tr>
<tr>
<td>INT</td>
<td>Standard Integer</td>
</tr>
<tr>
<td>BIGINT</td>
<td>Large Integer</td>
</tr>
<tr>
<td>DECIMAL</td>
<td>Fixed-point number</td>
</tr>
<tr>
<td>FLOAT</td>
<td>Single-precision floating-point number</td>
</tr>
<tr>
<td>DOUBLE</td>
<td>Double-precision floating-point number</td>
</tr>
<tr>
<td>BIT</td>
<td>Bit-field</td>
</tr>
</tbody>
</table></figure>
          </article>
        </section>
        <section class="ibpage-article-header" id="view-database-mysql">
          <h3>7. How do you view a database in MySQL?</h3>
          <article class="ibpage-article">
            <p>One can view all the databases on the MySQL server host using the following command:</p><p><code>mysql&gt; SHOW DATABASES;  </code></p>
          </article>
        </section>
            
  <div class="ib-articles-asset moco">
      <img
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/mobile/moco-72ff76f92a9c14ca43d5a250cdfa321edad54c1d46f1a71bdee08a687643b3f5.svg.gz"
        class="ib-articles-asset__img ib-articles-asset__img--mobile">
    <img
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/desktop/moco-c7ebe9f8f47748ffae9ae0533cc6e71697ba1e8bb0df4c7c4f481b44b74c5d91.svg.gz"
      class="ib-articles-asset__img ib-articles-asset__img--moco">
    <div
      data-class="ib-articles-asset-content-moco"
      class="ib-articles-asset__content"
    >
      <div class="ib-articles-asset__title-container">
        <span class="ib-articles-asset__title">Advance your career with &nbsp;</span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--highlighted">
          Mock Assessments
        </span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile ib-articles-asset__title--highlighted">
          Refine your coding skills with Mock Assessments
        </span>
      </div>
      <div class="ib-articles-asset__description">
        Real-world coding challenges for top company interviews
      </div>
      <div class="ib-articles-asset__description ib-articles-asset__description--mobile">
        Real-world coding challenges for top companies
      </div>
      <div class="ib-articles-asset__keypoints">
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--full-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/code-99b8ddab28469d3e18187c7e7f62dcf921ece612e63043b7515547d441ea3ebb.svg.gz">
            Real-Life Problems
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--full-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/layout-alt-39a6b2a56b986dbae952a4e1a7fde9324f0bafeb365b03e4ecb507ff876531e0.svg.gz">
            Detailed reports
          </div>
      </div>
    </div>
      <div class="ibpage__ibanner-action">
        <div
          class="inline-banner__moco-general-test"
          data-gtm-sub-product="moco_banners"
          data-gtm-section="inline-ribbon"
        >
          <!-- DYNAMICALLY ANCHOR TAG OR DIV TAG WILL BE APPENDED -->
        </div>
      </div>
  </div>

        <section class="ibpage-article-header" id="mysql-delete-query">
          <h3>8. How to Delete Data From a MySQL Table?</h3>
          <article class="ibpage-article">
            <p>In MySQL, the DELETE statement is used to delete records from a table:</p><pre><code class="language-plaintext hljs">DELETE FROM table_name
WHERE column_name = value_name</code></pre>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-create-index">
          <h3>9. How to create an Index in MySQL?</h3>
          <article class="ibpage-article">
            <p>In MySQL, there are different index types, such as a regular INDEX, a PRIMARY KEY, or a FULLTEXT index. You can achieve fast searches with the help of an index. Indexes speed up performance by either ordering the data on disk so it's quicker to find your result or, telling the SQL engine where to go to find your data.</p><p>Example: Adding indexes to the history table:</p><pre><code class="language-plaintext hljs">ALTER TABLE history ADD INDEX(author(10));
ALTER TABLE history ADD INDEX(title(10));
ALTER TABLE history ADD INDEX(category(5));
ALTER TABLE history ADD INDEX(year);
DESCRIBE history;</code></pre>
          </article>
        </section>
        <section class="ibpage-article-header" id="sql-drop-column">
          <h3>10. How do you remove a column from a database?</h3>
          <article class="ibpage-article">
            <p>You can remove a column by using the DROP keyword:</p><p><code>ALTER TABLE classics DROP pages;</code></p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-insert-data">
          <h3>11. How do you Insert Data Into MySQL?</h3>
          <article class="ibpage-article">
            <p>The INSERT INTO statement is used to add new records to a MySQL table:</p><pre><code class="language-plaintext hljs">INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)</code></pre><p>If we want to add values for all the columns of the table, we do not need to specify the column names in the SQL query. However, the order of the values should be in the same order as the columns in the table. The INSERT INTO syntax would be as follows:</p><pre><code class="language-plaintext hljs">INSERT INTO table_name
VALUES (value1, value2, value3, ...);</code></pre>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-create-table">
          <h3>12. How do you create a table using MySQL?</h3>
          <article class="ibpage-article">
            <p>Use the following to create a table using MySQL:</p><pre><code class="language-plaintext hljs">CREATE TABLE history (
author VARCHAR(128),
title VARCHAR(128),
type VARCHAR(16),
year CHAR(4)) ENGINE InnoDB;</code></pre>
          </article>
        </section>
            <div
  data-class="ib-promotion-scaler-app"
  data-promotion-placement="reading-track"
>
</div>

<link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/interviewbit~6f5df9fb.c31445.css" defer="defer" />


        <section class="ibpage-article-header" id="create-database-mysql">
          <h3>13. How do you create a database in MySQL?</h3>
          <article class="ibpage-article">
            <p>Use the following command to create a new database called ‘books’:</p><p><code>CREATE DATABASE books;</code></p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-commands">
          <h3>14. What are some of the common MySQL commands?</h3>
          <article class="ibpage-article">
            <figure class="table"><table>
<thead><tr>
<th>Command</th>
<th>Action</th>
</tr></thead>
<tbody>
<tr>
<td>ALTER</td>
<td>To alter a database or table</td>
</tr>
<tr>
<td>BACKUP</td>
<td>To back-up a table</td>
</tr>
<tr>
<td>\c</td>
<td>To cancel Input</td>
</tr>
<tr>
<td>CREATE</td>
<td>To create a database</td>
</tr>
<tr>
<td>DELETE</td>
<td>To delete a row from a table</td>
</tr>
<tr>
<td>DESCRIBE</td>
<td>To describe a table's columns</td>
</tr>
<tr>
<td>DROP</td>
<td>To delete a database or table</td>
</tr>
<tr>
<td>EXIT(ctrl+c)</td>
<td>To exit</td>
</tr>
<tr>
<td>GRANT</td>
<td>To change user privileges</td>
</tr>
<tr>
<td>HELP (\h, \?)</td>
<td>Display help</td>
</tr>
<tr>
<td>INSERT</td>
<td>Insert data</td>
</tr>
<tr>
<td>LOCK</td>
<td>Lock table(s)</td>
</tr>
<tr>
<td>QUIT(\q)</td>
<td>Same as EXIT</td>
</tr>
<tr>
<td>RENAME</td>
<td>Rename a Table</td>
</tr>
<tr>
<td>SHOW</td>
<td>List details about an object</td>
</tr>
<tr>
<td>SOURCE</td>
<td>Execute a file</td>
</tr>
<tr>
<td>STATUS (\s)</td>
<td>Display the current status</td>
</tr>
<tr>
<td>TRUNCATE</td>
<td>Empty a table</td>
</tr>
<tr>
<td>UNLOCK</td>
<td>Unlock table(s)</td>
</tr>
<tr>
<td>UPDATE</td>
<td>Update an existing record</td>
</tr>
<tr>
<td>USE</td>
<td>Use a database</td>
</tr>
</tbody>
</table></figure>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-database-queries">
          <h3>15. What are MySQL Database Queries?</h3>
          <article class="ibpage-article">
            <p>A query is a specific request or a question. One can query a database for specific information and have a record returned.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="interact-with-mysql">
          <h3>16. How can you interact with MySQL?</h3>
          <article class="ibpage-article">
            <p>There are three main ways you can interact with MySQL: </p><ul>
<li>using a command line</li>
<li>via a web interface</li>
<li>through a programming language</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-database">
          <h3>17. What does a MySQL database contain?</h3>
          <article class="ibpage-article">
            <p>A MySQL database contains one or more tables, each of which contains records or rows. Within these rows are various columns or fields that contain the data itself.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="sql-in-mysql-stand-for">
          <h3>18. What does SQL in MySQL stand for?</h3>
          <article class="ibpage-article">
            <p>The SQL in MySQL stands for Structured Query Language. This language is also used in other databases such as Oracle and Microsoft SQL Server.  One can use commands such as the following to send requests from a database:</p><p><code>SELECT title FROM publications WHERE author = ' J. K. Rowling’;</code></p><pre><code class="language-plaintext hljs">Note that SQL is not case sensitive. However, it is a good practice to write the SQL keywords in CAPS and other names and variables in a small case.</code></pre><p>You can check out this <a href="https://www.scaler.com/topics/sql/" target="_blank" rel=""><strong>SQL Tutorial</strong></a> to learn more about SQL. </p>
          </article>
        </section>
        <section class="ibpage-article-header" id="what-is-a-database">
          <h3>19. What do you mean by ‘databases’?</h3>
          <article class="ibpage-article">
            <p>A database is a structured collection of data stored in a computer system and organized in a way to be quickly searched. With databases, information can be rapidly retrieved.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-advantages">
          <h3>20. What are some of the advantages of using MySQL?</h3>
          <article class="ibpage-article">
            <ul>
<li>
<u>Flexibility:</u> MySQL runs on all operating systems</li>
<li>
<u>Power:</u> MySQL focuses on performance</li>
<li>
<u>Enterprise-Level SQL Features:</u> MySQL had for some time been lacking in advanced features such as subqueries, <a href="https://www.scaler.com/topics/views-in-sql/" target="_blank" rel=""><strong>views</strong></a>, and stored procedures.</li>
<li><u>Full-Text Indexing and Searching</u></li>
<li>
<u>Query Caching:</u> This helps enhance the speed of MySQL greatly</li>
<li>
<u>Replication:</u> One MySQL server can be duplicated on another, providing numerous advantages</li>
<li><u>Configuration and Security</u></li>
</ul>
          </article>
        </section>

  </div>
  <div
    data-scroll-id="1"
    data-scroll-identifier="each-article-section"
    id="mysql-intermediate-questions"
  >
    <h2>Intermediate MySQL Interview Questions</h2>

        <section class="ibpage-article-header" id="mysql-relationships-types">
          <h3>1. What are the types of relationships used in MySQL?</h3>
          <article class="ibpage-article">
            <p>There are three categories of relationships in MySQL:</p><ul>
<li>
<strong>One-to-One</strong>: Usually, when two items have a one-to-one relationship, you just include them as columns in the same table.</li>
<li>
<strong>One-to-Many</strong>: One-to-many (or many-to-one) relationships occur when one row in one table is linked to many rows in another table.</li>
<li>
<strong>Many-to-Many</strong>: In a many-to-many relationship, many rows in one table are linked to many rows in another table. To create this relationship, add a third table containing the same key column from each of the other tables</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-clients-utilities">
          <h3>2. What are the MySQL clients and utilities?</h3>
          <article class="ibpage-article">
            <p>Several MySQL programs are available to help you communicate with the server. For administrative tasks, some of the most important ones are listed here:</p><p>• <strong>mysql</strong>—An interactive program that enables you to send SQL statements to the server and to view the results. You can also use mysql to execute batch scripts (text files containing SQL statements).</p><p>• <strong>mysqladmin</strong>—An administrative program for performing tasks such as shutting down the server, checking its configuration, or monitoring its status if it appears not to be functioning properly.</p><p>• <strong>mysqldump</strong>—A tool for backing up your databases or copying databases to another server.</p><p>• <strong>mysqlcheck and myisamchk</strong>—Programs that help you perform table checking, analysis, and optimization, as well as repairs if tables become damaged. mysqlcheck works with MyISAM tables and to some extent with tables for other storage engines. myisamchk is for use only with MyISAM tables.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-server">
          <h3>3. What is the MySQL server?</h3>
          <article class="ibpage-article">
            <p>The server, mysqld, is the hub of a MySQL installation; it performs all manipulation of databases and tables.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="how-many-triggers-are-allowed-in-mysql-table">
          <h3>4. How many Triggers are possible in MySQL?</h3>
          <article class="ibpage-article">
            <p>There are six Triggers allowed to use in the MySQL database:</p><ul>
<li>Before Insert</li>
<li>After Insert</li>
<li>Before Update</li>
<li>After Update</li>
<li>Before Delete</li>
<li>After Delete</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-triggers">
          <h3>5. What are MySQL Triggers?</h3>
          <article class="ibpage-article">
            <p>A trigger is a task that executes in response to some predefined database event, such as after a new row is added to a particular table. Specifically, this event involves inserting, modifying, or deleting table data, and the task can occur either prior to or immediately following any such event. <br>Triggers have many purposes, including:</p><ul>
<li>Audit Trails</li>
<li>Validation</li>
<li>Referential integrity enforcement</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="create-and-execute-views-mysql">
          <h3>6. How do you create and execute views in MySQL?</h3>
          <article class="ibpage-article">
            <p>Creating a view is accomplished with the CREATE VIEW statement. As an example:</p><pre><code class="language-plaintext hljs">CREATE
   [OR REPLACE]
   [ALGORITHM = {MERGE | TEMPTABLE | UNDEFINED }]
   [DEFINER = { user | CURRENT_USER }]
   [SQL SECURITY { DEFINER | INVOKER }]
   VIEW view_name [(column_list)]
   AS select_statement
   [WITH [CASCADED | LOCAL] CHECK OPTION]</code></pre>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-views">
          <h3>7. What are MySQL “Views”?</h3>
          <article class="ibpage-article">
            <p>In MySQL, a view consists of a set of rows that is returned if a particular query is executed. This is also known as a ‘virtual table’. Views make it easy to retrieve the way of making the query available via an alias. <br>The advantages of views are:</p><ul>
<li>Simplicity</li>
<li>Security</li>
<li>Maintainability</li>
</ul>
          </article>
        </section>

  </div>
  <div
    data-scroll-id="2"
    data-scroll-identifier="each-article-section"
    id="mysql-advanced-questions"
  >
    <h2>Advanced MySQL Interview Questions</h2>

        <section class="ibpage-article-header" id="mysql-transaction-storage-engines">
          <h3>1. What are Transaction Storage Engines in MySQL?</h3>
          <article class="ibpage-article">
            <p>To be able to use MySQL’s transaction facility, you have to be using MySQL’s InnoDB storage engine (which is the default from version 5.5 onward). If you are not sure which version of MySQL your code will be running on, rather than assuming InnoDB is the default engine you can force its use when creating a table, as follows.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="what-is-sharding-in-sql">
          <h3>2. What is Sharding in SQL?</h3>
          <article class="ibpage-article">
            <p>The process of breaking up large tables into smaller chunks (called shards) that are spread across multiple servers is called Sharding. <br>The advantage of Sharding is that since the sharded database is generally much smaller than the original; queries, maintenance, and all other tasks are much faster.</p>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-scaling">
          <h3>3. What is Scaling in MySQL?</h3>
          <article class="ibpage-article">
            <p>In MySQL, scaling capacity is actually the ability to handle the load, and it’s useful to think of load from several different angles such as:</p><ul>
<li>Quantity of data</li>
<li>Number of users</li>
<li>User activity</li>
<li>Size of related datasets</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="mysql-logical-architecture">
          <h3>4. Can you explain the logical architecture of MySQL?</h3>
          <article class="ibpage-article">
            <p>The top layer contains the services most network-based client/server tools or servers need such as connection handling, authentication, security, and so forth.<br>The second layer contains much of MySQL’s brains. This has the code for query parsing, analysis, optimization, caching, and all the built-in functions.</p><p>The third layer contains the storage engines that are responsible for storing and retrieving the data stored in MySQL.</p><figure class="image image_resized" style="width:50%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/104/original/Artboard_28.png?1615216675" class="lazy-elem"></figure>
          </article>
        </section>

  </div>
  <div
    data-scroll-id="3"
    data-scroll-identifier="each-article-section"
    id="mysql-conclusion"
  >
    <h2>Conclusion</h2>

        <section class="ibpage-article-header" id="mysql-conclusion">
          <h3>1. Conclusion</h3>
          <article class="ibpage-article">
            <p>Several free or low-cost database management systems are available from which to choose, such as MySQL, PostgreSQL, or SQLite.</p><p>When you compare MySQL with other database systems, think about what’s most important to you. Performance, features (such as SQL conformance or extensions), support, licensing conditions, and price all are factors to take into account.</p><p>MySQL is one of the best RDBMS being used for developing various web-based software applications.</p><p>MySQL is offered under two different editions: the open-source MySQL Community Server and the proprietary Enterprise Server.<br>Given these considerations, MySQL has many attractive qualities:</p><ul>
<li>Speed</li>
<li>Ease of use</li>
<li>Query language support</li>
<li>Capability</li>
<li>Connectivity and security</li>
<li>Portability</li>
<li>Availability and cost</li>
<li>Open distribution and source code</li>
</ul><p><strong>Few MySQL References: </strong></p><ul>
<li><a href="https://www.mysql.com" rel="noopener noreferrer nofollow" target="_blank">https://www.mysql.com</a></li>
<li><a href="https://learning.oreilly.com/library/view/learning-mysql/0596008643/" rel="noopener noreferrer nofollow" target="_blank">https://learning.oreilly.com/library/view/learning-mysql/0596008643/</a></li>
</ul><p><strong>Recommended Resources</strong></p><ul>
<li><a href="https://www.interviewbit.com/database-testing-interview-questions/" target="_blank" rel="">Database Testing Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/technical-interview-questions/" target="_blank" rel="">Technical Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/blog/postgresql-vs-mysql/" target="_blank" rel="">PostgreSQL vs MySQL</a></li>
<li><a href="https://www.interviewbit.com/blog/sql-vs-mysql/" target="_blank" rel="">SQL Vs MySQL</a></li>
<li><a href="https://www.interviewbit.com/blog/mongodb-vs-mysql/" target="_blank" rel="">MongoDB vs MySQL</a></li>
</ul>
          </article>
        </section>

  </div>



  </section>
</div>

  


  
  <div
    data-target-active-class="articles-mcqs"
    class="ib-articles-mcqs"
  >
      <section class="ibpage-problems" id="mysql-mcq-questions">
        
<h2>MySQL MCQ Questions</h2>

  <section class="ibpage-problems__item" id="interviewbit-question-000d">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">1.</span>
      <div>
        <p>Which of the following commands will you use to load data files into tables?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13036" id="p_13036_a_mysqlimport" value="">
        <label class="form-check__label form-check__label--v2" for="p_13036_a_mysqlimport">
          mysqlimport
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13036" id="p_13036_a_mysqldump" value="">
        <label class="form-check__label form-check__label--v2" for="p_13036_a_mysqldump">
          mysqldump
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13036" id="p_13036_a_mysqlexport" value="">
        <label class="form-check__label form-check__label--v2" for="p_13036_a_mysqlexport">
          mysqlexport
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13036" id="p_13036_a_mysqladmin" value="">
        <label class="form-check__label form-check__label--v2" for="p_13036_a_mysqladmin">
          mysqladmin
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-3e8c">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">2.</span>
      <div>
        <p>MySQL supports different character sets. Which command is used to display all character sets?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13029" id="p_13029_a_SHOW CHARACTER SET;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13029_a_SHOW CHARACTER SET;">
          SHOW CHARACTER SET;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13029" id="p_13029_a_SHOW;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13029_a_SHOW;">
          SHOW;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13029" id="p_13029_a_CHARACTER SET;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13029_a_CHARACTER SET;">
          CHARACTER SET;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13029" id="p_13029_a_None of the above" value="">
        <label class="form-check__label form-check__label--v2" for="p_13029_a_None of the above">
          None of the above
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-4251">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">3.</span>
      <div>
        <p>What exports table definitions and contents in MySQL?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13035" id="p_13035_a_mysqladmin" value="">
        <label class="form-check__label form-check__label--v2" for="p_13035_a_mysqladmin">
          mysqladmin
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13035" id="p_13035_a_mysqlimport" value="">
        <label class="form-check__label form-check__label--v2" for="p_13035_a_mysqlimport">
          mysqlimport
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13035" id="p_13035_a_mysqldump" value="">
        <label class="form-check__label form-check__label--v2" for="p_13035_a_mysqldump">
          mysqldump
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13035" id="p_13035_a_mysqlexport" value="">
        <label class="form-check__label form-check__label--v2" for="p_13035_a_mysqlexport">
          mysqlexport
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-6e20">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">4.</span>
      <div>
        <p>MySQL is capable of reading input from a file in batch mode. This is also known as the non-interactive mode. A lot of typing and time can be saved when commands are stored in a file and executed from a file.<br>Is the above statement True or False?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13031" id="p_13031_a_True" value="">
        <label class="form-check__label form-check__label--v2" for="p_13031_a_True">
          True
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13031" id="p_13031_a_False" value="">
        <label class="form-check__label form-check__label--v2" for="p_13031_a_False">
          False
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-7543">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">5.</span>
      <div>
        <p>In MySQL, what does a fully qualified table name consist of?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13039" id="p_13039_a_only the table name" value="">
        <label class="form-check__label form-check__label--v2" for="p_13039_a_only the table name">
          only the table name
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13039" id="p_13039_a_only the database name" value="">
        <label class="form-check__label form-check__label--v2" for="p_13039_a_only the database name">
          only the database name
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13039" id="p_13039_a_table name followed by database name" value="">
        <label class="form-check__label form-check__label--v2" for="p_13039_a_table name followed by database name">
          table name followed by database name
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13039" id="p_13039_a_database name followed by table name" value="">
        <label class="form-check__label form-check__label--v2" for="p_13039_a_database name followed by table name">
          database name followed by table name
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-7bca">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">6.</span>
      <div>
        <p>Which of the following MySQL statements is valid if `<code>sampledb</code>` is a database and ‘<code>tbl</code>’ is a table in it?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13040" id="p_13040_a_SELECT * FROM `sampledb.member`" value="">
        <label class="form-check__label form-check__label--v2" for="p_13040_a_SELECT * FROM `sampledb.member`">
          SELECT * FROM `sampledb.member`
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13040" id="p_13040_a_SELECT * FROM `sampledb`.`member`" value="">
        <label class="form-check__label form-check__label--v2" for="p_13040_a_SELECT * FROM `sampledb`.`member`">
          SELECT * FROM `sampledb`.`member`
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13040" id="p_13040_a_SELECT * FROM `member`.`sampledb`" value="">
        <label class="form-check__label form-check__label--v2" for="p_13040_a_SELECT * FROM `member`.`sampledb`">
          SELECT * FROM `member`.`sampledb`
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13040" id="p_13040_a_SELECT * FROM `member.sampledb`" value="">
        <label class="form-check__label form-check__label--v2" for="p_13040_a_SELECT * FROM `member.sampledb`">
          SELECT * FROM `member.sampledb`
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-9862">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">7.</span>
      <div>
        <p>Which of the following is not a characteristic of MySQL?<br> </p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13032" id="p_13032_a_Open Source" value="">
        <label class="form-check__label form-check__label--v2" for="p_13032_a_Open Source">
          Open Source
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13032" id="p_13032_a_Portability" value="">
        <label class="form-check__label form-check__label--v2" for="p_13032_a_Portability">
          Portability
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13032" id="p_13032_a_Slow speed" value="">
        <label class="form-check__label form-check__label--v2" for="p_13032_a_Slow speed">
          Slow speed
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13032" id="p_13032_a_Ease of use" value="">
        <label class="form-check__label form-check__label--v2" for="p_13032_a_Ease of use">
          Ease of use
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-a619">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">8.</span>
      <div>
        <p>Which one is the correct declaration for choosing the character set other than default?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="7"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13038" id="p_13038_a_Varchar(20) character set;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13038_a_Varchar(20) character set;">
          Varchar(20) character set;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="7"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13038" id="p_13038_a_Varchar(20) character set utf8;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13038_a_Varchar(20) character set utf8;">
          Varchar(20) character set utf8;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="7"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13038" id="p_13038_a_Varchar(20);" value="">
        <label class="form-check__label form-check__label--v2" for="p_13038_a_Varchar(20);">
          Varchar(20);
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="7"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13038" id="p_13038_a_None of the above" value="">
        <label class="form-check__label form-check__label--v2" for="p_13038_a_None of the above">
          None of the above
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-b664">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">9.</span>
      <div>
        <p>Character data can be stored as <strong>__</strong></p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="8"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13028" id="p_13028_a_Fixed length string" value="">
        <label class="form-check__label form-check__label--v2" for="p_13028_a_Fixed length string">
          Fixed length string
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="8"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13028" id="p_13028_a_Variable length string" value="">
        <label class="form-check__label form-check__label--v2" for="p_13028_a_Variable length string">
          Variable length string
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="8"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13028" id="p_13028_a_Either Fixed or Variable length string" value="">
        <label class="form-check__label form-check__label--v2" for="p_13028_a_Either Fixed or Variable length string">
          Either Fixed or Variable length string
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="8"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13028" id="p_13028_a_None of the above" value="">
        <label class="form-check__label form-check__label--v2" for="p_13028_a_None of the above">
          None of the above
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-b836">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">10.</span>
      <div>
        <p>Which of the following commands is used to create a database in MySQL?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="9"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13033" id="p_13033_a_MAKE DATABASE db_name;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13033_a_MAKE DATABASE db_name;">
          MAKE DATABASE db_name;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="9"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13033" id="p_13033_a_MAKE DATABASE" value="">
        <label class="form-check__label form-check__label--v2" for="p_13033_a_MAKE DATABASE">
          MAKE DATABASE
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="9"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13033" id="p_13033_a_CREATE DATABASE db_name;" value="">
        <label class="form-check__label form-check__label--v2" for="p_13033_a_CREATE DATABASE db_name;">
          CREATE DATABASE db_name;
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="9"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13033" id="p_13033_a_CREATE DATABASE" value="">
        <label class="form-check__label form-check__label--v2" for="p_13033_a_CREATE DATABASE">
          CREATE DATABASE
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-c287">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">11.</span>
      <div>
        <p>Which declaration represents that “character data will consume the same number of bytes as declared and is right padded”?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="10"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13037" id="p_13037_a_Char" value="">
        <label class="form-check__label form-check__label--v2" for="p_13037_a_Char">
          Char
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="10"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13037" id="p_13037_a_Varchar" value="">
        <label class="form-check__label form-check__label--v2" for="p_13037_a_Varchar">
          Varchar
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="10"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13037" id="p_13037_a_Both Char and Varchar" value="">
        <label class="form-check__label form-check__label--v2" for="p_13037_a_Both Char and Varchar">
          Both Char and Varchar
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="10"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13037" id="p_13037_a_None of the above" value="">
        <label class="form-check__label form-check__label--v2" for="p_13037_a_None of the above">
          None of the above
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-eeba">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">12.</span>
      <div>
        <p>The connection parameters for setting up MySQL can be stored in an option file to save typing the names every time a connection is established.</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="11"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13034" id="p_13034_a_True" value="">
        <label class="form-check__label form-check__label--v2" for="p_13034_a_True">
          True
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="11"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13034" id="p_13034_a_False" value="">
        <label class="form-check__label form-check__label--v2" for="p_13034_a_False">
          False
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
</body>
</html>