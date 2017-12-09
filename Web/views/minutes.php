<div id='minutes'>
  <div class='minute-item'>
  <div class='minute-title'>
    <span class='minute-title-text'>Minutes</span>
  </div>
  </div>


  <div class='minute-item'>
  <div class='accordion minute-accordion'>
    <button class='minute-noti-icon noti-icon-cancel' name='noti' id='noti'>
        <i class='material'>cancel</i>
    </button>
    <span class='minute-name'> " + dataItem['minute_index'] + "</span>
    <button type='submit' class='minute-transparent' name='download' id='download'>
        <i class='material'>picture_as_pdf</i>
    </button>

    <button class='minute-transparent' name='matterview' id='matterview'>
        <i class='material'>list</i>
    </button>
  </div>
  <div class='minute-panel'>
    <table class='minute-accordion-table'>
      <tr>
        <td>Date</td>
        <td>" + dataItem['datetime'] + "</td>
      </tr>
      <tr>
        <td>Matters Approved</td>
        <td>" + dataItem['approved_count'] + "</td>
      </tr>

      <tr>
        <td>" + dataItem['sent_count'] + "</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Attendance</td>
        <td>" + dataItem['attendance_count'] + "</td>
      </tr>
    </table>
    <button type='submit' class='minute-raw' name='raw' id='raw'>
      Raw Minute
    </button>
  </div>
  </div>



  <div class='minute-item'>
  <div class='accordion minute-accordion'>
    <span class='minute-name'>128</span>
    <button class='minute-noti-icon noti-icon-hold' name='noti' id='noti'>
        <i class='material'>update</i>
    </button>
    <button type='submit' class='minute-transparent' name='download' id='download'>
        <i class='material'>picture_as_pdf</i>
    </button>

    <button class='minute-transparent' name='matterview' id='matterview'>
        <i class='material'>list</i>
    </button>

  </div>
  <div class='minute-panel'>
    <table class='minute-accordion-table'>
      <tr>
        <td>Date</td>
        <td>20/10/2017</td>
      </tr>

      <tr>
        <td>Matters Approved</td>
        <td>6</td>
      </tr>

      <tr>
        <td>Pending Matters</td>
        <td>4</td>
      </tr>
      <tr>
        <td>Attendance</td>
        <td>49</td>
      </tr>
    </table>
    <button type='submit' class='minute-raw' name='raw' id='raw'>
      Raw Minute
    </button>
  </div>
  </div>
  <div class='minute-item'>
  <div class='accordion minute-accordion'>
    <button class='minute-noti-icon noti-icon-done' name='noti' id='noti'>
        <i class='material'>done</i>
    </button>
    <span class='minute-name'>127</span>
    <button type='submit' class='minute-transparent' name='download' id='download'>
        <i class='material'>picture_as_pdf</i>
    </button>

    <button class='minute-transparent' name='matterview' id='matterview'>
        <i class='material'>list</i>
    </button>

  </div>
  <div class='minute-panel'>
    <table class='minute-accordion-table'>
      <tr>
        <td>Date</td>
        <td>20/09/2017</td>
      </tr>

      <tr>
        <td>Matters Approved</td>
        <td>8</td>
      </tr>

      <tr>
        <td>Pending Matters</td>
        <td>2</td>
      </tr>
      <tr>
        <td>Attendance</td>
        <td>51</td>
      </tr>
    </table>
    <button type='submit' class='minute-raw' name='raw' id='raw'>
      Raw Minute
    </button>
  </div>
</div>
</div>
