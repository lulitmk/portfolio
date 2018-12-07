<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="../../styles/CIS.css">
    <link rel="stylesheet" type="text/css" href="../styles/mod_style.css">
</head>
<body>
<div class="container">
    <div class="top">
        <?php include '../includes/mod_nav.php'; ?>
    </div>

    <div class="banner" style="padding:0px; width: 90%;border-radius: 10px;margin-bottom:1%;">
        <h1>MODULE THREE : MySQL & SQL</h1>
    </div>
    <div class="big-box">
        <div class="box left-nav">
            <?php include 'left_nav.php'; ?>
        </div>
        <div class="box content">
            <div id="cont">
                <div id="contt">
                    <h2>
                        <div style="text-align: center;">MYSQL and SQL Assignment</div>
                    </h2>
                    <ol>
                        <li><b>What is RDBMS?</b></li>
                        <p>Relational Data Base Management Systems (RDBMS) are database management systems that maintain
                            data records and indices in tables. Relationships may be created and maintained across and
                            among the
                            data and tables. In a relational database, relationships between data items are expressed by
                            means
                            of
                            tables. Interdependence among these tables are expressed by data values rather than by
                            pointers.
                            This allows a high degree of data independence. An RDBMS has the capability to recombine the
                            data
                            items from different files, providing powerful tools for data usage.</p>
                        <li><b>What is SQL?</b></li>
                        <p>SQL stands for Structured Query Language , and it is used to communicate with the Database.
                            This is a standard language used to perform tasks such as retrieval, updation, insertion and
                            deletion of data from a database.
                        </p>
                        <li><b>What is a Database?</b></li>
                        <p>
                            Database is nothing but an organized form of data for easy access, storing, retrieval and
                            managing of data. This is also known as structured form of data which can be accessed in
                            many ways.
                        </p>
                        <li><b> What are tables and Fields?</b></li>
                        <p>
                            A table is a set of data that are organized in a model with Columns and Rows. Columns can be
                            categorized as vertical, and Rows are horizontal. A table has specified number of column
                            called
                            fields but can have any number of rows which is called record.
                        </p>
                        <li><b>What is a primary key?</b></li>
                        <p>
                            A primary key is a combination of fields which uniquely specify a row. This is a special
                            kind of
                            unique key, and it has implicit NOT NULL constraint. It means, Primary key values cannot be
                            NULL.
                        </p>
                        <li><b>What is normalization?</b></li>
                        <p>
                            Database normalization is a data design and organization process applied to data structures
                            based on
                            rules that help build relational databases. In relational database design, the process of
                            organizing data
                            to minimize redundancy. Normalization usually involves dividing a database into two or more
                            tables and
                            defining relationships between the tables. The objective is to isolate data so that
                            additions, deletions,
                            and modifications of a field can be made in just one table and then propagated through the
                            rest of the
                            database via the defined relationships. </p>
                        <li><b>What is Collation?</b></li>
                        <p>
                            Collation refers to a set of rules that determine how data is sorted and compared. Character
                            data is
                            sorted using rules that define the correct character sequence, with options for specifying
                            casesensitivity,
                            accent marks, kana character types and character width.
                        </p>
                        <li><b>What is Denormalization.</b></li>
                        <p>
                            DeNormalization is a technique used to access the data from higher to lower normal forms of
                            database. It is also process of introducing redundancy into a table by incorporating data
                            from
                            the related tables.
                        </p>
                        <li><b>What is a trigger?</b></li>
                        <p>
                            A DB trigger is a code or programs that automatically execute with response to some event on
                            a table or view in a database. Mainly, trigger helps to maintain the integrity of the
                            database.
                        </p>
                        <li><b>What is Datawarehouse?</b></li>
                        <p>
                            Datawarehouse is a central repository of data from multiple sources of information. Those
                            data
                            are consolidated, transformed and made available for the mining and online processing.
                            Warehouse data have a subset of data called Data Marts.</p>
                        <!-- <li><b></b></li>
                        <p></p> http://gn.dronacharya.info/CSEDept/Downloads/Placements/Sql_Interview.pdf
                        https://www.guru99.com/sql-interview-questions-answers.html    -->
                    </ol>


                </div>
            </div>

        </div>
        <div class="box right-nav">
            <?php include 'right_nav.php' ?>
        </div>
    </div>
    <br><br>
    <div class="bottom">
        <?php include '../../includes/footer.php'; ?>
    </div>
</div>
</body>
</html>