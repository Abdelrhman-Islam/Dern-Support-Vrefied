@extends('layouts.layout')
@section('title') Show @endsection
@section('content')
<div class="container mt-5" >
    <div class="text-center mb-5">
        <h1 >Common hardware problems and their solutions</h1>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Overheating
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong> If your computer is overheating, it can lead to performance issues or even damage components. Solutions include:</strong>
              <ul>
                <li>Ensure proper airflow around the computer.</li>
                <li>Clean dust and debris from fans and vents.</li>
                <li>Consider adding additional cooling solutions like more fans or a better CPU cooler.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Slow performance
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Slow performance can be caused by various factors such as insufficient RAM, a fragmented hard drive, or too many background processes. Solutions include:</strong>
              <ul>
                <li>Upgrade RAM if possible.</li>
                <li>Perform disk defragmentation (for HDDs) or trim (for SSDs).</li>
                <li>Close unnecessary background applications or processes.</li>
              </ul>
          </div>
        </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Blue Screen of Death (BSOD)
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is a system error that causes the computer to crash and display a blue screen. It can be caused by hardware or software issues. Solutions include:</strong>
              <ul>
                <li>Update device drivers.</li>
                <li>Check for hardware compatibility issues.</li>
                <li>Run hardware diagnostics to identify faulty components.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                Hardware failure (e.g., hard drive failure)
            </button>
          </h2>
          <div id="collapseFore" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>TComponents can fail due to age, manufacturing defects, or physical damage. Solutions include:</strong>
              <ul>
                <li>Regularly back up important data to prevent loss.</li>
                <li>Replace the faulty hardware component (e.g., hard drive, RAM stick).</li>
                <li>Use diagnostic tools to identify and troubleshoot the failing hardware.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Noisy fans or hard drives
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Excessive noise from fans or hard drives can be annoying and may indicate a problem. Solutions include:</strong>
              <ul>
                <li>Clean dust and debris from fans and vents.</li>
                <li>Replace worn-out or malfunctioning fans or hard drives.</li>
                <li>Ensure proper mounting and alignment of components to reduce vibrations.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Peripheral connectivity issues
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problems with peripherals such as printers, mice, or keyboards not being recognized can occur due to faulty connections or driver issues. Solutions include:</strong>
              <ul>
                <li>Check cable connections and try different ports.</li>
                <li>Update device drivers.</li>
                <li>Test peripherals on another computer to isolate the issue.</li>
              </ul>

            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Screen/display issues (e.g., flickering, no display)
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problems with the display can be caused by issues with the monitor, graphics card, or cable connections. Solutions include:</strong>
              <ul>
                <li>Check cable connections between the monitor and computer.</li>
                <li>Update graphics card drivers.</li>
                <li>Test the monitor on another computer to determine if it's the source of the problem.</li>
              </ul>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection


