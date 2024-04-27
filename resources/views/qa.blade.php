@extends('layouts.layout')
@section('title') Q / A @endsection
@section('content')
<div class="container mt-5" >
    <div class="text-center mb-5">
        <h1 >Common hardware problems and their solutions</h1>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Continuous Beep:
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problem: A continuous beep often indicates a power supply or motherboard issue.</strong>
              <ul>
                <li>=>Check that all power connectors are securely plugged in, including the main motherboard power connector and CPU power connector.</li>
                <li>=>Test the power supply unit (PSU) with a multimeter or PSU tester to ensure it's delivering proper voltage.</li>
                <li>=>Remove and reseat the RAM modules, graphics card, and other expansion cards to ensure they are properly seated.</li>
                <li>=>If the issue persists, it may indicate a faulty motherboard or CPU, which may require professional diagnosis and repair.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                One Long, Two Short Beeps (or similar pattern):
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problem: This beep pattern typically indicates a problem with the graphics card or its connection.</strong>
              <ul>
                <li>=> Ensure the graphics card is securely seated in its PCIe slot.</li>
                <li>=> Check that the power connectors to the graphics card are properly connected.</li>
                <li>=> Test the graphics card in another computer or try using a different graphics card to determine if the issue lies with the card itself.</li>
                <li>=> If the problem persists, it may indicate a faulty graphics card or PCIe slot on the motherboard, requiring further investigation.</li>
              </ul>
          </div>
        </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Three Long Beeps:
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problem: Three long beeps usually signal a memory (RAM) error.</strong>
              <ul>
                <li>=> Reseat the RAM modules to ensure they are properly seated in their slots.</li>
                <li>=> Test each RAM module individually in different memory slots to identify a potentially faulty module or slot.</li>
                <li>=> Clean the RAM contacts with a soft cloth and reinsert them.</li>
                <li>=> If the issue persists, try replacing the RAM modules with known working ones to determine if the problem lies with the RAM itself.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                One Long Beep Followed by Three Short Beeps:
            </button>
          </h2>
          <div id="collapseFore" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problem: This beep pattern often indicates a problem with the system's RAM or memory configuration.</strong>
              <ul>
                <li>=> Reseat the RAM modules and ensure they are properly seated in their slots.</li>
                <li>=> Verify that the RAM modules are compatible with the motherboard and are installed in the correct slots according to the motherboard manual.</li>
                <li>=> Test each RAM module individually in different slots to identify potential issues.</li>
                <li>=> If possible, try using known working RAM modules to determine if the problem lies with the RAM itself or the motherboard.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                No Beep (or No POST):
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Problem: If the computer does not produce any beep codes or display any signs of Power-On Self-Test (POST), it indicates a severe hardware failure.</strong>
              <ul>
                <li>=> Check that all power connections are secure and that the power supply unit (PSU) is functioning correctly.</li>
                <li>=> Ensure that all components are properly seated, including the CPU, RAM, graphics card, and cables.</li>
                <li>=> Test individual components (RAM, CPU, GPU) in another system if possible to identify faulty hardware.</li>
                <li>=> If the issue persists, consider consulting a professional technician or contacting the manufacturer's support for further assistance.</li>
              </ul>
            </div>
          </div>
        </div>
        
    </div>
</div>
@endsection


