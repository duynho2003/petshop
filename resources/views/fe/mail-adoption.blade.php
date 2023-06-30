<p>Hello <strong>{{$user->first_name}}{{$user->last_name}}</strong></p>
<p>We would like to inform you that your request to adopt a dog has been successfully confirmed. We appreciate your interest and love for these dogs in need of care and affection.</p>
<p>Here are the details regarding the dog adoption process:</p>
<p><strong>Dog's name:</strong> {{$product->name}}</p>
<p><strong>Picture:</strong>  <img src="{{ asset('/images/' . $product->image) }}" alt="lỗi" width="460px" height="160px"></p>
<p><strong>Description:</strong>  {{$product->description}}</p>
<p><strong>Expected adoption date:</strong> {{ date('d/m/Y', strtotime('+7 days')) }}</p></p>
<p><strong>Adoption location:</strong> 830 CMT8 </p>
<p>Please review and confirm the above information. If you need to make any changes or have any questions, please contact us via the email address or phone number provided below.</p>
<p>We will be in touch with you as soon as possible to arrange the adoption process and provide further details. Prior to picking up the dog, please prepare relevant documents such as paperwork, medical records, and provide a safe and warm environment for your new furry friend.</p>
<p>Thank you for choosing to adopt a dog from us. We believe that you will create a loving and caring environment for your new companion. If you have any further questions or requests, please do not hesitate to contact us.</p>
<p>Best regards,<br>
Hoa Dang<br>
<p>Email: hoadang@gmail.com<br>
Phone: 0343586906</p>
