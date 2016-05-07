@extends('layouts.master_welcome')

@section('title')
    LabQuest Rubric
@stop

@section('content')
    <h1>Rubric</h1>

    <table summary="Rubric for using Labquest" class="rubrictable">
        <tr>
             <th scope="col">Criteria</th>
             <th scope="col">Beginning</th>
             <th scope="col">Novice</th>
             <th scope="col">Proficient</th>
             <th scope="col">Advanced</th>
        </tr>
        <tr>
            <td>Technical Skill</td>
            <td>Can turn on Labquest unit &amp; connect a sensor. Uses stylus to navigate between different views. Can often start data collection without assistance.</td>
            <td>Understands only one menu function. Has trouble locating major functions and activating them. Makes some mistakes inputting run parameters. Can start data collection without assistance.     </td>
            <td>Understands the major menu functions and locations; can locate &amp; use most submenus. Able to setup and change run parameters. Reliably starts data collection. Uses labels well. Can save &amp; recall files. Only uses one method for exporting data files.     </td>
            <td>Understands all menu and submenu locations &amp;functions without searching. Easily able to setup &amp; change run parameters. Confidently starts &amp; manipulates data collection. Always uses descriptive labels. Can save &amp; recall files. Easily able to export data files using several different methods (email, USB drive, LoggerPro software, Vernier app)    </td>
        </tr>
        <tr>
            <td>Data Analysis</td>
            <td>Collects data, but cannot interpret significance of graph or data table views. Makes mistakes interpreting x &amp; y axis. Collects needless amounts of run data. </td>
            <td>Can often apply a linear fit to a graph. Can make predictions, but with faulty interpretations of graph data. Able to show data trends with some assistance. </td>
            <td>Understands when to use most Analyze menu functions. Can usually make some good predictions. Correctly interprets the major outcome of experimental run(s). Toggles between graph &amp; table views. </td>
            <td>Understands when &amp; why to use Analyze menu functions for evaluating runs. Always able to accurately predict trends in data and show comparisons by overlaying runs. Always uses stylus/graph functions to manipulate &amp; interpret data. Easily toggles between graph &amp; table views. </td>
        </tr>

    </table>

        <!-- To get started <a href='/login'>log in</a> or <a href='/register'>register</a>. -->

@stop
